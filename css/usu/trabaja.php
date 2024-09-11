<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trabaja con Nutrianimals</title>
   <!--ENCABEZADO-->
   <div class="start" id="img">
    </div>
    <div class="start" id="Botpa">
       <center><img class="imagen" src="./LOGO.png" alt=""></center>
      <a href="index.html"><button id="p1">Inicio</button></a>
      <a href="Animales.php"><button id="p2">Animales</button></a>
      <a href="Alimentos.php"><button id="p3">Alimentos</button></a>
      <a href="Iniciarsesion.php"><button id="p4">Iniciar Sesioon</button></a>
  </div>
  <style>
    #p1{
margin-left: 580px;
margin-top: 25px;
}
.start{
    background-color: rgb(38, 255, 0);
}
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4; 
    }

    h1 {
      color: #007bff;
    }

    h2 {
      color: #333; 
      max-width: 1000px;
      margin: 0 auto; 
    }
    
    .small-image {
      width: 50px;
    }
    form {
      max-width: 600px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-top: 10px;
    }

    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      padding: 8px;
      margin-top: 6px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: #007bff;
      color: #fff;
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }
    
  </style>
</head>
<body>
  <div style="text-align: center; padding: 20px;">
    <strong><h1>Quieres trabajar con Nutrianimals?</h1></strong>
  </div>
  
  <div style="text-align: center; padding: 20px;">
    <h2>
      En el equipo de Nutrianimals trabajamos juntos, día a día, para 
      hacer realidad nuestro propósito: Promover la organización de sus granjas y fincas para evitar pérdidas
      económicas y de material, contribuyendo a la economía. ¡Únete a nuestros equipos en las diferentes geografías para alcanzar tus
      objetivos personales y profesionales!
    </h2>
  </div>
  <div class="small-image">
    <img src="ima.png" alt="uwu">
  </div>
  
 <div> <center>
  <h2>Escribenos!</h2>
   <strong><p>Contactanos si quieres trabajar con nosotros.</p></strong>
  <form method="post" action="submit_form.php">
  <strong>  <label for="name">Nombre:</label><br> </strong>
    <input type="text" id="name" name="name" required><br>
   <strong> <label for="email">Email:</label><br> </strong>
    <input type="email" id="email" name="email" required><br>
 <strong> <label for="position">Cargo:</label><br> </strong>
    <input type="text" id="position" name="position" required><br>
   <strong><label for="message">Mensaje:</label><br> </strong>
    <textarea id="message" name="message" rows="4" cols="50" required></textarea><br>
    <input type="submit" value="Submit">
  </form> </center>
</div>
<!--PIE DE PAGINA-->

<div class="contendor" id="pag">
    <img src="./LOGOS.png" alt="">
    <h4 id="titp">ACERCA DE NOSOTROS</h4>
    <a href="somos.php" id="pbut">¿Quiénes Somos?</a>
    <a href="equipo.php" id="pbut2">Equipo de Trabajo</a>
    <a href="trabaja.php" id="pbut3">Trabaja </a>
    <a href="asociate.php" id="pbut4">Asóciate </a>
    <h4 id="ptit">AYUDA Y SOPORTE</h4>
    <a href="preguntas.php" id="botp">Preguntas </a>
    <a href="condiciones.php" id="botp2">Condiciones </a>
    <a href="politica.php" id="botp3">Política </a>
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
</div>
</body>
</html>