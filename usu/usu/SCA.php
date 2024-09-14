<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Recomendaciones</title>
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
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .btn-submit {
            background-color: #8BC34A; /* Verde más claro */
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .btn-submit:hover {
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
            .header nav a, .btn-submit, #pag a {
                width: 100%;
                margin: 5px 0;
                text-align: center;
            }
        }
    </style>
    <script>
        // Función para actualizar las razas según el tipo de animal
        function actualizarRazas() {
            var tipoAnimal = document.getElementById('tipo-animal').value;
            var razaSelect = document.getElementById('raza');
            
            var razas = {
                'perro': ['Labrador', 'Beagle', 'Bulldog', 'Pastor Alemán'],
                'gato': ['Siames', 'Persa', 'Maine Coon', 'Bengalí'],
                'caballo': ['Pura Sangre', 'Cuarto de Milla', 'Percherón', 'Andaluz'],
                'oveja': ['Merina', 'Suffolk', 'Dorset', 'Rasa'],
                'vaca': ['Holstein', 'Jersey', 'Guernsey', 'Hereford'],
                'pez': ['Goldfish', 'Betta', 'Guppy', 'Corydoras']
            };

            // Limpiar las opciones actuales
            razaSelect.innerHTML = '<option value="" disabled selected>Seleccione la raza</option>';

            // Añadir las nuevas opciones
            if (razas[tipoAnimal]) {
                razas[tipoAnimal].forEach(function(raza) {
                    var option = document.createElement('option');
                    option.value = raza.toLowerCase().replace(/\s+/g, '-');
                    option.textContent = raza;
                    razaSelect.appendChild(option);
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
            <a href="contacto.php" class="btn btn-dark">Contacto</a>
        </nav>
    </div>

    <!-- Contenido principal -->
    <div class="main-content">
        <div class="container">
            <h1 class="text-center">Sistema de Recomendaciones para Animales</h1>
            <form action="recomendaciones.php" method="post">
                <div class="form-group">
                    <label for="tipo-animal">Tipo de Animal</label>
                    <select class="form-control" id="tipo-animal" name="tipo-animal" onchange="actualizarRazas()" required>
                        <option value="" disabled selected>Seleccione el tipo de animal</option>
                        <option value="perro">Perro</option>
                        <option value="gato">Gato</option>
                        <option value="caballo">Caballo</option>
                        <option value="oveja">Oveja</option>
                        <option value="vaca">Vaca</option>
                        <option value="pez">Pez</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="raza">Raza del Animal</label>
                    <select class="form-control" id="raza" name="raza" required>
                        <option value="" disabled selected>Seleccione la raza</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="peso">Peso del Animal (kg)</label>
                    <select class="form-control" id="peso" name="peso" required>
                        <option value="" disabled selected>Seleccione el peso</option>
                        <option value="1-5">1-5 kg</option>
                        <option value="6-15">6-15 kg</option>
                        <option value="16-30">16-30 kg</option>
                        <option value="31-50">31-50 kg</option>
                        <option value="51+">Más de 50 kg</option>
                    </select>
                </div>
                <button type="submit" class="btn-submit">Obtener Recomendaciones</button>
            </form>
        </div>
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
