<?php include('PHP/conexion.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Fútbol Hoy</title>
    <link rel="stylesheet" href="CSS/registro.css"> <!-- Archivo CSS para registro -->
</head>

<body>
    <header>
        <!-- Título de mi página web -->
        <h1>Fútbol_hoy</h1>

    </header>

    <main class="registration">
        <h2>Registrarse</h2>
        <div id="message" style="color: red; font-weight: bold; margin-bottom: 10px;"></div>
        <form id="registration-form" action="PHP/registro.php" method="POST">
            <div class="form-group">
                <label for="Nombre">Nombre:</label>
                <input type="text" id="Nombre" name="Nombre" required placeholder="Ingresa tu nombre">
            </div>
            <div class="form-group">
                <label for="Correo_Electrónico">Correo Electrónico:</label>
                <input type="correo" id="Correo_Electrónico" name="Correo_Electrónico" required placeholder="Ingresa tu correo">
            </div>
            <div class="form-group">
                <label for="Contraseña">Contraseña:</label>
                <input type="contraseña" id="Contraseña" name="Contraseña" required placeholder="Crea una contraseña">
            </div>
            
            <button type="submit" class="btn submit-btn">Registrarse</button>
        </form>
    </main>

    <footer>
        <div class="footer-content">
            <!-- Enlaces de interés -->
            <div class="footer-links">
                <a href="#about-us">Sobre nosotros</a>
                <a href="#privacy-policy">Política de privacidad</a>
                <a href="#terms-conditions">Términos y condiciones</a>
                <a href="#contact">Contacto</a>
            </div>
    
            <!-- Información de contacto -->
            <div class="contact-info">
                <p>Contacta con nosotros:</p>
                <p>Email: contacto@futbolhoy.com</p>
                <p>Teléfono:  04149638749</p>
            </div>
    
            <!-- Derechos de autor -->
            <div class="copyright">
                <p>© 2024 Fútbol Hoy. Todos los derechos reservados.</p>
                <p>Diseñado por [Tu Nombre o el nombre de tu equipo]</p>
            </div>
            <br>
            
            <!-- Redes sociales -->
            <div class="social-icons">
                <a href="https://www.facebook.com" target="_blank">
                    <img src="Imagenes/facebook.png" alt="Facebook">
                </a>
                <a href="https://www.instagram.com" target="_blank">
                    <img src="Imagenes/instagram.png" alt="Instagram">
                </a>
                <a href="https://www.twitter.com" target="_blank">
                    <img src="Imagenes/twitter.png" alt="Twitter">
                </a>
            </div>
        </div>
    </footer>

      <!-- Agrega el código JavaScript justo antes de cerrar el body -->
      <script>
        // Obtener los parámetros de la URL
        const params = new URLSearchParams(window.location.search);
        const message = params.get("message");
        const isError = params.get("error") === "true";

        if (message) {
            const messageDiv = document.getElementById("message");
            messageDiv.textContent = message;
            messageDiv.style.color = isError ? "red" : "green";
        }
    </script>

</body>

</html>
