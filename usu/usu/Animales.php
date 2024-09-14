<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Selección de Animales</title>
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
        }
        .header .logo {
            max-height: 50px;
            display: inline-block;
        }
        .header nav {
            display: inline-block;
            vertical-align: middle;
            margin-left: 20px;
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
        .main-content {
            padding-top: 80px; /* espacio para el encabezado fijo */
        }

        /* Contenedor principal */
        .container {
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .animal-card {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .animal-card img {
            width: 100%;
            height: auto;
        }
        .animal-card-body {
            padding: 15px;
        }
        .animal-card-body h3 {
            margin-top: 0;
        }
        .btn-submit, .btn-back {
            background-color: #8BC34A; /* Verde más claro */
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .btn-submit:hover, .btn-back:hover {
            background-color: #7CB342; /* Verde medio */
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
            .header nav a, .btn-submit, .btn-back, #pag a {
                width: 100%;
                margin: 5px 0;
                text-align: center;
            }
        }
    </style>
    <script>
        // Función para mostrar animales según la categoría seleccionada
        function mostrarAnimales() {
            var categoria = document.getElementById('categoria').value;
            var animalesDiv = document.getElementById('animales');
            
            var animales = {
                'granja': [
                    {nombre: 'Vaca', imagen: 'vaca.png', descripcion: 'Las vacas son animales de granja importantes para la producción de leche y carne.'},
                    {nombre: 'Oveja', imagen: 'oveja.png', descripcion: 'Las ovejas son criadas principalmente por su lana y carne.'},
                    {nombre: 'Caballo', imagen: 'caballo.png', descripcion: 'Los caballos son utilizados en labores de campo y como animales de compañía.'}
                ],
                'domestico': [
                    {nombre: 'Perro', imagen: 'perro.png', descripcion: 'Los perros son mascotas leales y compañeros de vida.'},
                    {nombre: 'Gato', imagen: 'gato.png', descripcion: 'Los gatos son conocidos por su independencia y agilidad.'},
                    {nombre: 'Pez', imagen: 'pez.png', descripcion: 'Los peces son mascotas acuáticas que requieren un acuario para vivir.'}
                ]
            };

            // Limpiar contenido actual
            animalesDiv.innerHTML = '';

            // Añadir animales según la categoría seleccionada
            if (animales[categoria]) {
                animales[categoria].forEach(function(animal) {
                    var card = document.createElement('div');
                    card.classList.add('animal-card');
                    card.innerHTML = `
                        <img src="${animal.imagen}" alt="${animal.nombre}">
                        <div class="animal-card-body">
                            <h3>${animal.nombre}</h3>
                            <p>${animal.descripcion}</p>
                        </div>
                    `;
                    animalesDiv.appendChild(card);
                });
            }
        }
    </script>
</head>
<body>
    <!-- Encabezado -->
    <div class="header d-flex justify-content-between align-items-center px-3">
        <img src="./logo.png" alt="Logo" class="logo">
        <nav class="d-flex">
            <a href="index.html" class="btn btn-dark">Inicio</a>
            <a href="animales.php" class="btn btn-dark">Animales</a>
            <a href="alimentos.php" class="btn btn-dark">Alimentos</a>
            <a href="index.php" class="btn btn-dark">Cerrar Sesión</a>
        </nav>
    </div>

    <!-- Contenido principal -->
    <div class="main-content">
        <div class="container">
            <h1 class="text-center">Selecciona una Categoría de Animales</h1>
            <form>
                <div class="form-group">
                    <label for="categoria">Categoría de Animales</label>
                    <select class="form-control" id="categoria" name="categoria" onchange="mostrarAnimales()" required>
                        <option value="" disabled selected>Seleccione una categoría</option>
                        <option value="granja">Animales de Granja</option>
                        <option value="domestico">Animales Domésticos</option>
                    </select>
                </div>
            </form>

            <!-- Sección para mostrar animales -->
            <div id="animales"></div>

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
        <h4>Acerca de Nosotros</h4>
        <a href="somos.php">¿Quiénes Somos?</a>
        <a href="equipo.php">Equipo de Trabajo</a>
        <a href="trabaja.php">Trabaja con Nosotros</a>
        <a href="asociate.php">Asóciate con Nosotros</a>
        <h4>Ayuda y soporte</h4>
        <a href="preguntas.php">Preguntas Frecuentes</a>
        <a href="condiciones.php">Condiciones</a>
        <a href="politica.php">Política de Privacidad</a>
        <a href="cookies.php">Política de Cookies</a>
        <a href="contacto.php">Contáctanos</a>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
