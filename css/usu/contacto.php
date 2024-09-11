<html>
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="./contacto.css">
       
    </head>
 <body>
    <div class="start" id="img">
    </div>
    <div class="start" id="Botpa">
       <center><img class="imagen" src="./LOGO.png" alt=""></center>
      <button id="p1">Inicio</button>
      <button id="p2">Animales</button>
      <button id="p3">Alimentos</button>
     <button id="p4">Iniciar Sesioon</button>
  </div> 

  <div class="container">
	<div class="row">
			<h1>Contactanos</h1>
	</div>
	<div class="row">
			<h4 style="text-align:center">Nos encantaria saber tu opinion.</h4>
	</div>
	<div class="row input-container">
			<div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text" required />
					<label>Nombre</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
					<input type="text" required />
					<label>Email</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input" style="float:right;">
					<input type="text" required />
					<label>Numero telefonico</label> 
				</div>
			</div>
			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea required></textarea>
					<label>Mensaje</label>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="btn-lrg submit-btn">enviar mensaje</div>
			</div>
	</div>
</div>



  <div class="container" id="pag">
    <center><img src="./LOGOS.png" alt=""></center>
    <h4 id="titp">ACERCA DE NOSOTROS </h4>
  <a href="somos.php">
    <button id="pbut">¿Quienes Somos?</button>
  </a>
  <a href="equipo.php">
    <button id="pbut2">Equipo de trabajo</button>
  </a>
  <a href="trabaja.php">
    <button id="pbut3">Trabaja con nosotros </button>
  </a>
  <a href="asociate.php">
    <button id="pbut4">Asociate con nosotros </button>
  </a>
    <h4 id="ptit">AYUDA Y SOPORTE </h4>
    <a href="preguntas.php">
    <button id="botp">Preguntas frecuentes </button>
  </a>
  <a href="condiciones.php">
    <button id="botp2">Condiciones de servicio</button>
  </a>
  <a href="politica.php">
    <button id="botp3">Politica de privacidad</button>
  </a>
  <a href="cookies.php">
    <button id="botp4">Politica de cookies</button>
  </a>
  <a href="contacto.php">
    <button id="botp5">Contactanos</button>
  </a>
  <style>
    #p1{
    margin-left: 580px;
    }

    #p1 {
        margin-left: 580px;
    }
    
    #Botpa{
        background-color: rgb(38, 255, 0);
    }
    #but{
        width: 300px; /* Ancho del botón */
        height: 50px; /* Altura del botón */
        background-color:rgb(38, 255, 0); /* Color de fondo del botón */
        color: white; /* Color del texto del botón */
        font-size: 16px; /* Tamaño del texto del botón */
        border: 10px; /* Borde del botón */
        border-radius: 5px; /* Radio de la esquina del borde del botón */
        cursor: pointer; /* Cambia el cursor al pasar sobre el botón */
    }
    #but2{
        width: 300px; /* Ancho del botón */
        height: 50px; /* Altura del botón */
        background-color: rgb(38, 255, 0); /* Color de fondo del botón */
        color: white; /* Color del texto del botón */
        font-size: 16px; /* Tamaño del texto del botón */
        border: 10px; /* Borde del botón */
        border-radius: 5px; /* Radio de la esquina del borde del botón */
        cursor: pointer; /* Cambia el cursor al pasar sobre el botón */
        margin-left: 280px;
    }
    #but3{
        width: 300px; /* Ancho del botón */
        height: 50px; /* Altura del botón */
        background-color: rgb(38, 255, 0); /* Color de fondo del botón */
        color: white; /* Color del texto del botón */
        font-size: 16px; /* Tamaño del texto del botón */
        border: 10px; /* Borde del botón */
        border-radius: 5px; /* Radio de la esquina del borde del botón */
        cursor: pointer; /* Cambia el cursor al pasar sobre el botón */
        margin-left: 230px;
    }
    
    #co{
        margin-top: 80px;
        
    }
    #co2{
        margin-left: 300px;
    }
    #co3{
        margin-left: 300px;
    }
    
    #registro{
        margin-right: 898px;
        margin-top: 5px;
    }
    
    #bot{
        color: white;
        cursor: pointer;
        background-color:rgb(38, 255, 0);
        border-radius: 5px;
        font-size: 16px;
        width: 200px;
        height: 50px;
        margin-right: 100px;
    
    }
    #titulo{
        margin-left: 160px;
        margin-top: 250px;
    }
    
    #formulario{
        margin-left: 800px;
        margin-bottom: 200px;
    }
    
    #reseñat{
        margin-left: 1050px;
        width: 50px;
    }
    
    #pag{
        background-color: rgb(0, 255, 34) ;
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
    
    #p1{
    margin-left: 580px;
    }
    h1 {
        font-family: 'Poppins', sans-serif, 'arial';
        font-weight: 600;
        font-size: 72px;
        color: rgb(0, 0, 0);
        text-align: center;
    }
    
    h4 {
        font-family: 'Roboto', sans-serif, 'arial';
        font-weight: 400;
        font-size: 20px;
        color: #9b9b9b;
        line-height: 1.5;
    }
    
    /* ///// inputs /////*/
   
    
    
    input:focus ~ label, textarea:focus ~ label, input:valid ~ label, textarea:valid ~ label {
        font-size: 0.75em;
        color: #000000;
        top: -5px;
        -webkit-transition: all 0.225s ease;
        transition: all 0.225s ease;
    }
    
    .styled-input {
        float: left;
        width: 293px;
        margin: 1rem 0;
        position: relative;
        border-radius: 4px;
    }
    
    @media only screen and (max-width: 768px){
        .styled-input {
            width:100%;
        }
    }
    
    .styled-input label {
        color: #999;
        padding: 1.3rem 30px 1rem 30px;
        position: absolute;
        top: 10px;
        left: 0;
        -webkit-transition: all 0.25s ease;
        transition: all 0.25s ease;
        pointer-events: none;
    }
    
    .styled-input.wide { 
        width: 650px;
        max-width: 100%;
    }
    
    input,
    textarea {
        padding: 30px;
        border: 0;
        width: 100%;
        font-size: 1rem;
        background-color: #2d2d2d;
        color: white;
        border-radius: 4px;
    }
    
    input:focus,
    textarea:focus { outline: 0; }
    
    input:focus ~ span,
    textarea:focus ~ span {
        width: 100%;
        -webkit-transition: all 0.075s ease;
        transition: all 0.075s ease;
    }
    
    textarea {
        width: 100%;
        min-height: 15em;
    }
    
    .input-container {
        width: 650px;
        max-width: 100%;
        margin: 20px auto 25px auto;
    }
    
    .submit-btn {
        float:right;
        padding: 7px 35px;
        border-radius: 60px;
        display: inline-block;
        background-color: #4b8cfb;
        color: white;
        font-size: 18px;
        cursor: pointer;
        box-shadow: 0 2px 5px 0 rgba(0,0,0,0.06),
                  0 2px 10px 0 rgba(0,0,0,0.07);
        -webkit-transition: all 300ms ease;
        transition: all 300ms ease;
    }
    
    .submit-btn:hover {
        transform: translateY(1px);
        box-shadow: 0 1px 1px 0 rgba(0,0,0,0.10),
                  0 1px 1px 0 rgba(0,0,0,0.09);
    }
    
    @media (max-width: 768px) {
        .submit-btn {
            width:100%;
            float: none;
            text-align:center;
        }
    }
    
    input[type=checkbox] + label {
      color: #ccc;
      font-style: italic;
    } 
    
    input[type=checkbox]:checked + label {
      color: #f00;
      font-style: normal;
    }
  </style>
</body>
</html>