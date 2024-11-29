<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";  // Servidor (normalmente "localhost")
$username = "root";         // Usuario de MySQL
$password = "";             // Contraseña de MySQL (por defecto, vacía en XAMPP)
$dbname = "fútbol_hoy";     // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>


