<?php
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $busqueda = strtolower(trim($_GET['search']));

    // Cambia "pagina02" por algo más descriptivo como "resultados"
    if (strpos($busqueda, 'resultados') !== false) { 
        header("Location: ../Pagina02.php");
        exit();
    } else {
        echo "No se encontró la página que buscaste: " . htmlspecialchars($busqueda);
    }
} else {
    echo "Por favor, ingresa un término de búsqueda.";
}
?>

