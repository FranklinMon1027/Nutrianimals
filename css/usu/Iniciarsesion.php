<div class="start" id="img">
    </div>
    <div class="start" id="Botpa">
       <center><img class="imagen" src="./LOGO.png" alt=""></center>
      <a href="index.html"><button id="p1">Inicio</button></a>
      <a href="Animales.php"><button id="p2">Animales</button></a>
      <a href="Alimentos.php"><button id="p3">Alimentos</button></a>
      <a href="Iniciarsesion.php"><button id="p4">Iniciar Sesion</button></a>
  
  </div>
  <style>
    #p1{
margin-left: 600px;
margin-top: 10px;
}
</style>
<style>
  .start{
    background-color: rgb(38, 255, 0);
  }
  </style>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión</title>
  <style>
    body {
      margin: 0;
      padding: 0;
    }

    #ini1, #ini2, #ini3 {
      width: 400px;
      height: 100px;
      margin-top: 20px;
      background-color: #74FF33;
      cursor: pointer;
      border-radius: 5px;
      display: block;
      margin: 20px auto;
      text-align: center;
      line-height: 100px;
      text-decoration: none;
      color: white;
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
    }
  </style>
</head>
<body>
  <center><h1>Elige una opción:</h1></center>
  <a href="usuarios.php" id="ini2">Usuario</a>
  <a href="register.php" id="ini3">Registrarse</a>

  <!-- PIE DE PAGINA -->
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
</body>
</html>
