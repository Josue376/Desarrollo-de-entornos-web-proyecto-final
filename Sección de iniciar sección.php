<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sección de iniciar sección| Fútbol Hoy</title>
    <link rel="stylesheet" href="CSS/MisEstilos02.css">
    
</head>

<body>
    <header>
            <!-- Título de mi página web -->
            <h1>Fútbol_hoy</h1>
    
    </header>

        <!-- Formulario de inicio de sesión -->
        <form class="login-form" aria-labelledby="login-heading">
            <h2 id="login-heading">Iniciar Sesión</h2>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" placeholder="Ingresa tu usuario" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Ingresa tu contraseña" required>
            </div>

            <div class="remember-options">
                <label>
                    <input type="checkbox" name="remember"> Recordar
                </label>
                <a href="#forgot-password" class="forgot-password">¿Olvidaste tu contraseña?</a>
            </div>

            <div class="form-group">
                <input type="submit" class="btn-primary" value="LOGIN">
            </div>
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

    <script src="Boton_Menú.js"></script>
</body>

</html>
