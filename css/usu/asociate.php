<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        /* Estilos para el cuerpo de la página */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            color: #4CAF50;
            border-bottom: 2px solid #ccc;
            padding-bottom: 10px;
            text-align: center;
        }

        h1, h2 {
            text-align: center;
        }

        p {
            text-align: justify;
        }

        /* Estilos para el menú */
        .menu {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }

        .menu button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 0 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        .menu button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="start" id="img"></div>
<div class="start" id="Botpa">
    <center><img class="imagen" src="./LOGO.png" alt=""></center>
    <a href="index.html"><button id="p1">Inicio</button></a>
    <a href="Animales.php"><button id="p2">Animales</button></a>
    <a href="Alimentos.php"><button id="p3">Alimentos</button></a>
    <a href="Iniciarsesion.php"><button id="p4">Iniciar Sesion</button></a>
</div>

<div class="container">
    <h1 class="section-title">Asociativos:</h1>

    <h2>Misión y Visión:</h2>
    <p>Presentamos nuestra misión y visión como empresa para destacar nuestro compromiso con la salud animal, la sostenibilidad y el bienestar de los agricultores.</p>

    <h2>Valores Corporativos:</h2>
    <p>Detallamos los valores fundamentales que guían nuestras operaciones, como la integridad, la innovación y la responsabilidad.</p>

    <h2>Alianzas Estratégicas:</h2>
    <p>Destacamos las colaboraciones y asociaciones con otras empresas, organizaciones sin fines de lucro o instituciones académicas que fortalecen nuestra capacidad para ofrecer soluciones de calidad.</p>

    <h2>Testimonios de Clientes:</h2>
    <p>Compartimos historias y comentarios de clientes satisfechos que han utilizado nuestros servicios y productos para gestionar eficazmente su inventario de animales de granja.</p>

    <h2>Certificaciones y Reconocimientos:</h2>
    <p>Exhibimos cualquier certificación relevante que respalde la calidad y la integridad de nuestros productos y servicios. También destacamos cualquier premio o reconocimiento recibido por nuestra empresa.</p>

    <p>Narramos la historia detrás de NutriAnimals, desde su fundación hasta el presente, destacando hitos importantes y momentos significativos en nuestra trayectoria.</p>

    <h1 class="section-title">Preguntas Frecuentes:</h1>

    <h2>¿Qué servicios ofrece NutriAnimals?</h2>
    <p>Detallamos los servicios que proporcionamos, como la gestión de inventario, el seguimiento de la salud animal y la consultoría para mejorar la eficiencia en la granja.</p>

    <h2>¿Cómo puedo empezar a trabajar con NutriAnimals?</h2>
    <p>Explicamos el proceso para comenzar a utilizar nuestros servicios, incluyendo cómo ponerse en contacto con nosotros y qué esperar durante la implementación.</p>

    <h2>¿Qué tipo de animales de granja atiende NutriAnimals?</h2>
    <p>Enumeramos los diferentes tipos de animales de granja para los cuales ofrecemos soluciones de inventario y gestión, como aves de corral, ganado, cerdos, etc.</p>

    <h2>¿Cuál es el costo de los servicios de NutriAnimals?</h2>
    <p>Brindamos información sobre nuestra estructura de precios y los factores que pueden influir en los costos, como el tamaño de la operación y los servicios específicos solicitados.</p>

    <h2>¿Cómo garantiza NutriAnimals la calidad y precisión de sus servicios?</h2>
    <p>Describimos los controles de calidad que tenemos en marcha, incluyendo tecnología avanzada, capacitación del personal y auditorías regulares, para garantizar la precisión y la fiabilidad de nuestros servicios.</p>

    <h2>¿Qué medidas toma NutriAnimals para promover el bienestar animal?</h2>
    <p>Explicamos nuestras políticas y prácticas que respaldan el bienestar de los animales, así como cualquier iniciativa específica que estemos llevando a cabo en este sentido.</p>
   
    <div class="contendor" id="pag">
    <img src="./LOGOS.png" alt="">
    <h4 id="titp">ACERCA DE NOSOTROS</h4>
    <a href="somos.php" id="pbut">¿Quiénes Somos?</a>
    <a href="equipo.php" id="pbut2">Equipo de Trabajo</a>
    <a href="trabaja.php" id="pbut3">Trabaja con Nosotros</a>
    <a href="asociate.php" id="pbut4">Asóciate con Nosotros</a>
    <h4 id="ptit">AYUDA Y SOPORTE</h4>
    <a href="preguntas.php" id="botp">Preguntas Frecuentes</a>
    <a href="condiciones.php" id="botp2">Condiciones </a>
    <a href="politica.php" id="botp3">Política de Privacidad</a>
    <a href="cookies.php" id="botp4">Política de Cookies</a>
    <a href="contacto.php" id="botp5">Contáctanos</a>
    </div>
<style>
body {
  margin: 0;
  padding: 0;
}


#pag {
  background-color: rgb(0, 255, 34);
  margin-top: 300px;
  text-align: center;
  padding: 20px;
}

#titp {
  color: white;
}

#pbut, #pbut2, #pbut3, #pbut4, #botp, #botp2, #botp3, #botp4, #botp5 {
  color: white;
  cursor: pointer;
  background-color: rgb(0, 255, 34);
  border-radius: 5px;
  font-size: 16px;
  width: 150px;
  height: 50px;
  margin: 10px;
  text-align: center;
  line-height: 50px;
  text-decoration: none;
  display: inline-block;
}

#ptit {
  color: white;
 margin-right: 30;
}
</style>

</body>
</html>