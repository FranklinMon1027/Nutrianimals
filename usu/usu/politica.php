<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Política de Privacidad</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* Estilos globales */
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            color: #333;
            line-height: 1.6;
        }
        a {
            text-decoration: none;
            color: inherit;
        }

        /* Encabezado fijo */
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

        /* Contenedor principal */
        .container {
            margin: 40px auto;
            max-width: 900px;
        }
        .container h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-align: center;
            color: #4CAF50; /* Verde natural */
        }
        .container h2 {
            font-size: 1.8rem;
            margin-top: 30px;
            color: #333;
        }
        .container p {
            font-size: 1rem;
            line-height: 1.6;
        }

        /* Pie de página */
        #pag {
            background-color: #4CAF50; /* Verde natural */
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
            background-color: #388E3C; /* Verde más oscuro */
            color: white;
            border-radius: 5px;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }
        #pag a:hover {
            background-color: #2C6C2F; /* Verde aún más oscuro */
        }
        .social-icons {
            margin-top: 20px;
        }
        .social-icons a {
            color: white;
            font-size: 24px;
            margin: 0 10px;
            transition: color 0.3s ease;
        }
        .social-icons a:hover {
            color: #B2B2B2; /* Gris claro */
        }

        /* Adaptabilidad */
        @media (max-width: 768px) {
            .header nav a, .container h1, .container h2, .container p, #pag a {
                width: 100%;
                margin: 5px 0;
                text-align: center;
            }
            .header .social-icons {
                margin-left: 0;
                text-align: center;
            }
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

    <!-- Contenido principal -->
    <div class="main-content">
        <div class="container">
            <h1>Política de Privacidad</h1>
            <p>
                En [Nombre de la Empresa], nos tomamos muy en serio la privacidad de nuestros usuarios. Esta política de privacidad describe cómo recopilamos, usamos y protegemos la información personal que nos proporcionas a través de nuestro sitio web.
            </p>
            <h2>1. Información que Recopilamos</h2>
            <p>
                Recopilamos información personal que tú nos proporcionas voluntariamente cuando te registras en nuestro sitio, realizas una compra, te suscribes a nuestro boletín, o contactas con nosotros. Esto puede incluir tu nombre, dirección de correo electrónico, dirección de envío y datos de pago.
            </p>
            <h2>2. Cómo Usamos Tu Información</h2>
            <p>
                Utilizamos la información que recopilamos para procesar tus pedidos, mejorar nuestro sitio web, enviarte actualizaciones sobre tus pedidos, y para ofrecerte contenido y promociones personalizadas. También podemos utilizar tu información para responder a tus consultas y proporcionarte soporte.
            </p>
            <h2>3. Cómo Protegemos Tu Información</h2>
            <p>
                Implementamos medidas de seguridad para proteger tu información personal contra accesos no autorizados, alteraciones, divulgaciones o destrucción. Usamos tecnología de encriptación y otras medidas de seguridad para garantizar la protección de tus datos.
            </p>
            <h2>4. Compartición de Información</h2>
            <p>
                No compartimos tu información personal con terceros, salvo en los casos en que sea necesario para cumplir con tu solicitud (por ejemplo, compartir tu dirección con una empresa de transporte para la entrega de un pedido) o si estamos obligados a hacerlo por ley.
            </p>
            <h2>5. Cookies</h2>
            <p>
                Utilizamos cookies para mejorar tu experiencia en nuestro sitio web. Las cookies son pequeños archivos que se almacenan en tu dispositivo y que nos permiten recordar tus preferencias y mejorar la funcionalidad del sitio. Puedes configurar tu navegador para rechazar las cookies, pero esto puede afectar tu capacidad para utilizar algunas funciones del sitio.
            </p>
            <h2>6. Enlaces a Otros Sitios</h2>
            <p>
                Nuestro sitio puede contener enlaces a otros sitios web que no están bajo nuestro control. No somos responsables de las prácticas de privacidad de estos sitios y te recomendamos que revises las políticas de privacidad de cada sitio que visitas.
            </p>
            <h2>7. Cambios en esta Política</h2>
            <p>
                Nos reservamos el derecho de modificar esta política de privacidad en cualquier momento. Las modificaciones entrarán en vigor tan pronto como se publiquen en nuestro sitio web. Te recomendamos que revises esta política periódicamente para estar informado sobre cómo protegemos tu información.
            </p>
            <h2>8. Contacto</h2>
            <p>
                Si tienes alguna pregunta o inquietud acerca de nuestra política de privacidad, no dudes en contactarnos a través de [correo electrónico de contacto] o mediante el formulario de contacto en nuestro sitio web.
            </p>
        </div>
    </div>

    <!-- Pie de página -->
    <div id="pag">
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
