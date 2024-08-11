<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  
<div class="start" id="img">
</div>
<div class="start" id="Botpa">
    <center><img class="imagen" src="./LOGO.png" alt=""></center>
    <a href="index.html"><button id="p1">Inicio</button></a>
    <a href="Animales.php"><button id="p2">Animales</button></a>
    <a href="Alimentos.php"><button id="p3">Alimentos</button></a>
    <a href="Iniciarsesion.php"><button id="p4">Iniciar Sesion</button></a>
</div>

<h1>Sistema de clasificación de animales</h1>
<form id="animalForm">
    <label for="animal">Escoje el animal:</label>
    <select id="animal" name="animal">
        <option value="dog">Vacas</option>
        <option value="cat">Caballos</option>
        <option value="bird">Ovejas</option>
        <option value="fish">Pez</option>
    </select>

    <label for="raza">Escoje la raza:</label>
    <select id="raza" name="raza" enabled>
        <option value="Raza1">Raza 1</option>
        <option value="Raza2">Raza 2</option>
        <option value="Raza3">Raza 3</option>
        <option value="Raza4">Raza 4</option>
    </select>

    <input type="submit" value="Enviar">
</form>

<div id="resultado"></div>
        </tbody>
      </table>
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

#pag{
    background-color: rgb(0, 255, 34) ;
    margin-top:300px;
}

#titp{
    color: white;
}

#pbut{
    color: white;
    cursor: pointer;
    background-color:rgb(0, 255, 34);
    border-radius: 5px;
    font-size: 16px;
    width: 100px;
    height: 50px;
}

#pbut2{
    color: white;
    cursor: pointer;
    background-color:rgb(0, 255, 34);
    border-radius: 5px;
    font-size: 16px;
    width: 100px;
    height: 50px;
}

#pbut3{
    color: white;
    cursor: pointer;
    background-color:rgb(0, 255, 34);
    border-radius: 5px;
    font-size: 16px;
    width: 100px;
    height: 50px;
}

#pbut4{
    color: white;
    cursor: pointer;
    background-color:rgb(0, 255, 34);
    border-radius: 5px;
    font-size: 16px;
    width: 150px;
    height: 50px;
}

#ptit{
    color: white;
    margin-left: 800px;
}

#botp{
    color: white;
    cursor: pointer;
    background-color:rgb(0, 255, 34);
    border-radius: 5px;
    font-size: 16px;
    width: 100px;
    height: 50px;
    margin-left: 800px;
    
}

#botp2{
    color: white;
    cursor: pointer;
    background-color:rgb(0, 255, 34);
    border-radius: 5px;
    font-size: 16px;
    width: 100px;
    height: 50px;
}

#botp3{
    color: white;
    cursor: pointer;
    background-color:rgb(0, 255, 34);
    border-radius: 5px;
    font-size: 16px;
    width: 100px;
    height: 50px;
}

#botp4{
    color: white;
    cursor: pointer;
    background-color:rgb(0, 255, 34);
    border-radius: 5px;
    font-size: 16px;
    width: 100px;
    height: 50px;
}

#botp5{
    color: white;
    cursor: pointer;
    background-color:rgb(0, 255, 34);
    border-radius: 5px;
    font-size: 16px;
    width: 100px;
    height: 50px;
}
<!--fin PIE DE PAGINA-->
    .start{
    background-color: rgb(26, 255, 0);
  }
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
}

h1 {
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;

    label {
        margin-bottom: 10px;
    }

    select {
        padding: 10px;
        border: none;
        border-radius: 5px;
        box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.1);
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
margin-top: 10px;
        padding: 10px 22px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #3e8e41;
    }
}
</style>

  <script>
    document.getElementById('animalForm').addEventListener('submit', function(event) {
        event.preventDefault(); 
        var animal = document.getElementById('animal').value;
        var raza = document.getElementById('raza').value;

    
        var info = '';
        if (animal === 'dog') {
            info = 'Animal: Vaca\nPeso: 0-0 kg\nRaza: ' + raza + '\nAlimentación: Comida con 18-25% de proteína\nMedicamentos: 0 ml de metametrazona';
        } else if (animal === 'cat') {
            info = 'Animal: Caballo\nPeso: 0-0 kg\nRaza: ' + raza + '\nAlimentación: Comida de caballo con 26-30% de proteína\nMedicamentos: Vacunas';
        } else if (animal === 'bird') {
            info = 'Animal: Oveja\nPeso: 0-0 kg\nRaza: ' + raza + '\nAlimentación: Pasto y suplementos\nMedicamentos: Para mejorar la lana';
        } else if (animal === 'fish') {
            info = 'Animal: Pez\nPeso: 0-0 kg\nRaza: ' + raza + '\nAlimentación: Comida para pez\nMedicamentos: Cambiar el agua antes de temperarla';
        }
        alert(info);
    });
</script>