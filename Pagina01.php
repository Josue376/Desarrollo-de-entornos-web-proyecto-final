<?php ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SOCCER</title>
        <link rel="stylesheet" href="CSS/MisEstilos01.css"> <!-- Archivo CSS externo -->
        
    </head>

    <body>
        <header>
            <!-- Título de mi página web -->
            <h1>Fútbol_hoy</h1>

            <!-- Botones LOG IN y SIGN IN -->
            <div class="auth-buttons">
                <button class="btn login-btn"><a href="Sección_registro.php">LOG IN</a></button>
                <button class="btn signup-btn"><a href="Sección de iniciar sección.php">SIGN IN</a></button>
            </div>

            <!-- Botón de menú con ícono -->
            <button class="menu-icon" onclick="toggleMenu()">☰ Menú</button>

            <!-- Barra de navegación -->
        <nav>
            <!-- Barra de búsqueda -->
        <div class="search-bar">
    <form method="GET" action="PHP/redirect.php"> <!-- Redirige a redirect.php -->
        <img src="Imagenes/Lupa.png" alt="Lupa" class="search-icon">
        <input type="text" name="search" placeholder="Buscar..." required>
        <button type="submit">Buscar</button>
    </form>
</div>
        </nav>

        </header>

        <nav>
            <!-- Menú desplegable -->
            <div class="menu" id="menu">
                <a href="#inicio">Inicio</a>
                <a href="#noticias">Noticias</a>
                <a href="Pagina02.php">Resultados o Partidos</a>
                <a href="#opciones">Opciones</a>
                <a href="#contactos">Contactos</a>
            </div>
        </nav>

        <main>
            <!-- Imagen de bienvenida -->
            <div class="contenedor">
            <img src="Imagenes/soccer-player.png" alt="Imagen de fútbol">
            </div>

        
            <!-- Descripción -->
            <p>
                Bienvenidos a fútbol_hoy, tu destino para las noticias más recientes y análisis profundos del fútbol mundial. Mantente al tanto de los resultados, fichajes y momentos más emocionantes del deporte rey.
            </p>
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

        <script src="Boton_Menú.js"></script> <!-- Archivo JavaScript -->
    </body>

    </html>
