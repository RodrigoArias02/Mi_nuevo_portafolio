<?php
// Datos de conexión
$servidor = "localhost";
$usuario = "root";
$contrasena = "";  // Si tienes una contraseña para el usuario root, inclúyela aquí
$base_de_datos = "portafolio";

// Crear la conexión
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}


?>
