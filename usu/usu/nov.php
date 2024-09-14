<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novedades</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!--ENCABEZADO-->
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
    .start{
    background-color: rgb(38, 255, 0);
}
#p1{
margin-left: 580px;
}
  </style>
    <header>
        <h1>Novedades</h1>
    </header>
    
    <main>
        <article class="news">
            <img src="https://estaticos.elcolombiano.com/binrepository/350x233/1c9/349d224/none/11101/WGVD/whatsapp-image-2024-03-21-at-10-36-04-am_44703187_20240321104417.jpg" alt="Imagen de noticia">
            <div class="content">
                <h2>En Rionegro inauguraron la que sería la planta de bioinsumos más grande en Colombia</h2>
                <p>En Rionegro, Antioquia, la multinacional estadounidense Gowan inauguró la que sería la planta de extracción y formulación de bioinsumos más grande de Colombia.
                La planta, propiedad de la multinacional estadounidense Gowan, contó con una inversión de 6 millones de dólares y la generación de 120 nuevos empleos directos en el país.
                </p>
            </div>
        </article>

        <article class="news">
            <img src="https://estaticos.elcolombiano.com/binrepository/350x233/1c0/349d224/none/11101/UJYQ/cecafe-27_44674358_20240317172713.jpg" alt="Imagen de noticia">
            <div class="content">
                <h2>Gobierno buscará “gran acuerdo cafetero” en próxima asamblea nacional</h2>
                <p>La ministra de Agricultura, Jhenifer Mojica, anunció que los próximos 3 y 4 de abril se realizará en Bogotá la Asamblea Nacional de Cooperativas y Asociaciones Caficultoras en la que se abordará, entre otros temas, los planes, políticas e inversiones que el Gobierno tiene para el sector.

La jefe de cartera mencionó que del “diálogo constructivo” que van a tener en esta gran asamblea nacional saldrán los planes de acción en materia de Reforma Agraria Cafetera, comercialización, programas de fertilización, agroindustrialización para la cadena y diversificación de mercados..</p>
                
            </div>
        </article>

        <article class="news">
            <img src="https://estaticos.elcolombiano.com/binrepository/349x253/1c0/349d224/none/11101/SHXJ/42815707-42815707-20230716225149_44651284_20240314144324.jpg" alt="Imagen de noticia">
            <div class="content">
                <h2>¿Qué tanto afecta la crisis mundial de cacao al mercado colombiano?</h2>
                <p>En el mundo se habla de una crisis internacional en el mercado del cacao a raíz de la baja producción en África, principal abastecedor del mundo. Y en Colombia los productores aprovechan la bonanza, mientras los fabricantes de chocolates se las ingenian para mitigar y absorber los altos costos de la materia prima. ¿Hay crisis en Colombia?.</p>
                
            </div>
        </article>
    </main>
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
<STyle>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background-color: #4CAF50;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

h1 {
    margin: 0;
}

main {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 20px;
}

.news {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: 20px 0;
    overflow: hidden;
    width: 300px;
}

.news img {
    width: 100%;
    height: auto;
}

.content {
    padding: 20px;
}

.content h2 {
    color: #333;
}

.content p {
    color: #666;
    margin-bottom: 20px;
}

.content a {
    color: #4CAF50;
    text-decoration: none;
    display: inline-block;
    border: 1px solid #4CAF50;
    padding: 8px 20px;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.content a:hover {
    background-color: #4CAF50;
    color: #fff;
}

footer {
    background-color: #4CAF50;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}
</STyle>
</html>