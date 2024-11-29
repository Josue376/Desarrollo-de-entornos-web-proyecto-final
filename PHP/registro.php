<?php
include('conexion.php');  // Incluir archivo de conexión a la base de datos

// Verificar si se enviaron los datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    // Obtener datos del formulario
    $Nombre	 = $_POST['Nombre'];
    $Correo_Electrónico = $_POST['Correo_Electrónico'];
    $Contraseña = $_POST['Contraseña'];
    //$fecha_registro	 = $_POST['fecha_registro'];
    
    // Validar que el correo electrónico no esté registrado
    $query = mysqli_query($conn, "SELECT * FROM usuarios WHERE Correo_Electrónico = '$Correo_Electrónico'");
    $result = mysqli_fetch_array($query);
    
    if($result > 0){
      // Redirigir con mensaje de error si el correo ya está registrado
      header("Location: ../Sección_registro.php?message=El correo electrónico ya está registrado&error=true");
    }else{
      $contraseña_hash = password_hash($Contraseña, PASSWORD_DEFAULT);

      $query_insert = mysqli_query($conn, "INSERT INTO usuarios(Nombre, Correo_Electrónico, Contraseña) 
      VALUES('$Nombre', '$Correo_Electrónico', '$contraseña_hash')");
    
      if($query_insert){
        // Redirigir con mensaje de éxito
        header("Location: ../Sección_registro.php?message=¡Registro exitoso!&error=false");
      }else{
        // Redirigir con mensaje de error si hay un fallo en la inserción
        header("Location: ../Sección_registro.php?message=Error al registrar el usuario&error=true");
      }
    }
    mysqli_close($conn);
  }

?>
