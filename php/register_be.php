<?php
include 'conexion_be.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = test_input($_POST['nombre']);
    $surname = test_input($_POST['apellido']);
    $email = test_input($_POST['email']);
    $password = test_input($_POST['contrasena']);

    // Check if user already exists in the database
    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User already exists, show error message on front-end
        echo "<script>alert('Este correo electrónico ya está registrado. Por favor, introduzca otro correo electrónico.');</script>";
        echo "<script>location.href='../register.php';</script>";
        exit;
    } else {
        // User doesn't exist, insert record into the usuarios table
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conexion->prepare("INSERT INTO usuarios (nombre, apellido, email, contrasena) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $surname, $email, $hashed_password);

        if ($stmt->execute()) {
            // Record inserted successfully, redirect to login page
            echo "<script>alert('Registro realizado con éxito. Por favor, inicie sesión.');</script>";
            echo "<script>location.href='../login.php';</script>";
            exit;
        } else {
            // Error inserting record
            header("Location: ../error.html");
            exit;
        }
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
