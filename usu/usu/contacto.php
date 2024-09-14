<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .header {
            background-color: #4CAF50; /* Verde natural */
            color: white;
            padding: 15px 0;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }
        .header .logo {
            max-height: 50px;
        }
        .header nav {
            display: flex;
            align-items: center;
        }
        .header nav a {
            color: white;
            padding: 10px 20px;
            margin: 0 5px;
            background-color: #388E3C; /* Verde más oscuro */
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .header nav a:hover {
            background-color: #2C6C2F; /* Verde aún más oscuro */
        }
        .header .social-icons {
            margin-left: 20px;
        }
        .header .social-icons a {
            color: white;
            font-size: 24px;
            margin: 0 10px;
            transition: color 0.3s ease;
        }
        .header .social-icons a:hover {
            color: #B2B2B2; /* Gris claro */
        }

        .main-content {
            padding-top: 80px; /* espacio para el encabezado fijo */
        }

        .container {
            margin: 40px auto;
            max-width: 800px;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #4CAF50; /* Verde natural */
            text-align: center;
        }

        .input-container {
            margin-top: 20px;
        }
        .styled-input {
            position: relative;
            margin-bottom: 20px;
        }
        .styled-input input,
        .styled-input textarea {
            width: 100%;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #fff;
            font-size: 1rem;
        }
        .styled-input input:focus,
        .styled-input textarea:focus {
            border-color: #4CAF50;
            outline: none;
        }
        .styled-input label {
            position: absolute;
            top: 15px;
            left: 15px;
            font-size: 1rem;
            color: #999;
            transition: all 0.3s ease;
            pointer-events: none;
        }
        .styled-input input:focus ~ label,
        .styled-input textarea:focus ~ label,
        .styled-input input:valid ~ label,
        .styled-input textarea:valid ~ label {
            top: -10px;
            left: 15px;
            font-size: 0.75rem;
            color: #4CAF50;
        }
        .submit-btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .submit-btn:hover {
            background-color: #388E3C;
        }

        .footer {
            background-color: #4CAF50; /* Verde natural */
            color: white;
            text-align: center;
            padding: 20px;
        }
        .footer h4 {
            margin: 10px 0;
        }
        .footer a {
            color: white;
            padding: 10px 20px;
            margin: 5px;
            background-color: #388E3C; /* Verde más oscuro */
            border-radius: 5px;
            font-size: 14px;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }
        .footer a:hover {
            background-color: #2C6C2F; /* Verde aún más oscuro */
        }
        .footer .social-icons a {
            font-size: 24px;
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <!-- Encabezado -->
    <div class="header">
        <img src="./LOGO.png" alt="Logo" class="logo">
        <nav>
            <a href="index.html" class="btn btn-dark">Inicio</a>
            <a href="Animales.php" class="btn btn-dark">Animales</a>
            <a href="Alimentos.php" class="btn btn-dark">Alimentos</a>
            <a href="index.php" class="btn btn-dark">Cerrar Sesión</a>
        </nav>
       
    </div>

    <!-- Contenido Principal -->
    <div class="main-content">
        <div class="container">
            <h1>Contáctanos</h1>
            <p class="text-center">Nos encantaría saber tu opinión. Por favor, completa el siguiente formulario para ponerte en contacto con nosotros.</p>
            <form action="enviar_mensaje.php" method="post">
                <div class="input-container">
                    <div class="styled-input">
                        <input type="text" name="nombre" required>
                        <label>Nombre</label>
                    </div>
                </div>
                <div class="input-container">
                    <div class="styled-input">
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                </div>
                <div class="input-container">
                    <div class="styled-input">
                        <input type="tel" name="telefono" required>
                        <label>Teléfono</label>
                    </div>
                </div>
                <div class="input-container">
                    <div class="styled-input">
                        <textarea name="mensaje" required></textarea>
                        <label>Mensaje</label>
                    </div>
                </div>
                <button type="submit" class="submit-btn">Enviar Mensaje</button>
            </form>
        </div>
    </div>

    <!-- Pie de Página -->
    <div class="footer">
        <h4>Enlaces Útiles</h4>
        <a href="somos.php">¿Quiénes Somos?</a>
        <a href="equipo.php">Equipo de Trabajo</a>
        <a href="trabaja.php">Trabaja con Nosotros</a>
        <a href="asociate.php">Asóciate con Nosotros</a>
        <h4>Ayuda y Soporte</h4>
        <a href="preguntas.php">Preguntas Frecuentes</a>
        <a href="condiciones.php">Condiciones</a>
        <a href="politica.php">Política de Privacidad</a>
        <a href="cookies.php">Política de Cookies</a>
        <a href="contacto.php">Contáctanos</a>
        <div class="social-icons">
            <a href="https://facebook.com" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://linkedin.com" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>

    <!-- JavaScript y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
