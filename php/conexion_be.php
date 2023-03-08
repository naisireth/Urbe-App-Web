<?php

/*
$conexion =  mysqli_connect("localhost","root", "", "aitana_bd");
if($conexion){
    echo "Conectado exitosamente a la BD";
}else{
    echo "Error al conectar a la BD";
}

*/

$conexion = mysqli_connect('localhost', 'root', '', 'aitana_bd');

// Check if the connection was successful
if (!$conexion) {
    die('Error connecting to the database: ' . mysqli_connect_error());
}
