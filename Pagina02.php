<?php
// Incluir el archivo de conexión
include 'PHP/Conexion.php';

// Realizar la consulta
$sql = "SELECT Fecha_partido, Hora, Equipo_local, Equipo_visitante, Resultado, Estadio, Competicion, Jornada, Estado, Detalles FROM resultados_fútbol";
$result = $conn->query($sql);

// Validar la consulta
if (!$result) {
    die("Error en la consulta SQL: " . $conn->error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Fútbol</title>
    <link rel="stylesheet" href="CSS/MisEstilos03.CSS"> <!-- Archivo CSS externo -->
</head>
<body>
    <header>
        <h1>Resultados de los partidos</h1>
    </header>
    <main>
        <section>
            <table style="width: 100%;">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Equipo Local</th>
                        <th>Equipo Visitante</th>
                        <th>Resultado</th>
                        <th>Estadio</th>
                        <th>Competición</th>
                        <th>Jornada</th>
                        <th>Estado</th>
                        <th>Detalles</th>
                    </tr>
                </thead>
                <tbody>
<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['Fecha_partido']}</td>
                <td>{$row['Hora']}</td>
                <td>{$row['Equipo_local']}</td>
                <td>{$row['Equipo_visitante']}</td>
                <td>{$row['Resultado']}</td>
                <td>{$row['Estadio']}</td>
                <td>{$row['Competicion']}</td>
                <td>{$row['Jornada']}</td>
                <td>{$row['Estado']}</td>
                <td>{$row['Detalles']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='10'>No hay resultados disponibles</td></tr>";
}
$conn->close();
?>
                </tbody>
            </table>
        </section>
    </main>
    <footer class="site-footer">
        <p>© 2024 Fútbol Hoy. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
