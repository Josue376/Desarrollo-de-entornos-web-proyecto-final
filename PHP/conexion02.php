<?php
// Configuración de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = ""; // Cambia esto si tienes una contraseña
$dbname = "fútbol_hoy";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
?>
