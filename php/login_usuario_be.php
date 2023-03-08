<?php

include('conexion_be.php');

$email = $_POST['email'];
$password = $_POST['contrasena'];

// Prepare a statement with placeholders for user input
$stmt = mysqli_prepare($conexion, "SELECT * FROM usuarios WHERE email = ?");

// Bind the user's email to the placeholder
mysqli_stmt_bind_param($stmt, "s", $email);

// Execute the statement
mysqli_stmt_execute($stmt);

// Get the result of the query
$result = mysqli_stmt_get_result($stmt);

// Fetch the first row of the result (there should only be one)
$row = mysqli_fetch_assoc($result);

if ($row && password_verify($password, $row['contrasena'])) {
    // Password is correct, redirect to index page
    header("Location: ../index.html");
    exit;
} else {
    // Password is incorrect or user doesn't exist
    echo "<script>alert('Usuario no encontrado, por favor verifique los datos introducidos');</script>";
    echo "<script>location.href='../login.php';</script>";
}

// Always close your database connection
mysqli_close($conexion);
