<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Página</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            color: #333;
        }

        /* Encabezado fijo */
        .header {
            background-color: #4CAF50;
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
            background-color: #388E3C;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .header nav a:hover {
            background-color: #2C6C2F;
        }

        .header .social-icons a {
            color: white;
            font-size: 24px;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .header .social-icons a:hover {
            color: #B2B2B2;
        }

        /* Pie de página */
        #pag {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 30px;
        }

        #pag h4 {
            margin: 10px 0;
        }

        #pag a {
            display: inline-block;
            margin: 5px;
            padding: 10px 20px;
            background-color: #388E3C;
            color: white;
            border-radius: 5px;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        #pag a:hover {
            background-color: #2C6C2F;
        }

        .social-icons a {
            color: white;
            font-size: 24px;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #B2B2B2;
        }
    </style>
</head>

<body>
    <!-- Encabezado -->
    <div class="header">
        <img src="./LOGO.png" alt="Logo" class="logo">
        <nav class="d-flex">
            <a href="index.html" class="btn btn-dark">Inicio</a>
            <a href="Animales.php" class="btn btn-dark">Animales</a>
            <a href="Alimentos.php" class="btn btn-dark">Alimentos</a>
            <a href="index.php" class="btn btn-dark">Cerrar Sesión</a>
        </nav>
    </div>

   <!-- Main content -->
   <div class="title">
        <center><h1>Nosotros</h1></center>
        <center><p>
            Somos una empresa que brinda una solución tecnológica a la población campesina, con el fin de administrar
            y gestionar los animales de granja. Ayudamos a los campesinos de la comunidad a controlar sus animales
            mediante un software de inventario. Nuestro objetivo es facilitar el manejo de los animales a través de
            nuestra aplicación.
        </p></center>

        <center><h2>Nuestros Objetivos</h2></center>
        <center><p>
            Desarrollar una aplicación que facilite la gestión de inventarios de alimentos para animales y optimice
            la alimentación de manera personalizada, teniendo en cuenta el peso, raza y edad de los animales. Esto mejorará su salud y bienestar.
        </p></center>

        <center><h2>Objetivos Específicos</h2></center>
        <center><p>
            - Desarrollar una interfaz de usuario intuitiva y fácil de usar.<br>
            - Asegurar una navegación fluida.<br>
            - Incorporar elementos visuales atractivos.<br>
            - Adaptar el lenguaje según la región (Colombia).
        </p></center>
    </div>

    <!-- Pie de página -->
    <div id="pag">
        <h4>Síguenos en Redes Sociales</h4>
        <div class="social-icons">
            <a href="https://facebook.com" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://linkedin.com" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <h4>Enlaces Útiles</h4>
        <a href="somos.php">¿Quiénes Somos?</a>
        <a href="equipo.php">Equipo de Trabajo</a>
        <a href="trabaja.php">Trabaja con Nosotros</a>
        <a href="asociate.php">Asóciate con Nosotros</a>
        <h4>AYUDA Y SOPORTE</h4>
        <a href="preguntas.php">Preguntas Frecuentes</a>
        <a href="condiciones.php">Condiciones</a>
        <a href="politica.php">Política de Privacidad</a>
        <a href="cookies.php">Política de Cookies</a>
        <a href="contacto.php">Contáctanos</a>
    </div>

    <!-- JavaScript y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>


  