<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <title>Bootstrap 5  Login Page Design</title>
  </head>
  <body>
    <section class="form-01-main">
      <div class="form-cover">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="form-sub-main">
              <div class="_main_head_as">
                <a href="#">
                  <img src="\xampp\htdocs\2771446\crudapi\loggin\assets\images\vector.png">
                </a>
              </div>
              <div class="form-group">
                  <input id="email" name="email" class="form-control _ge_de_ol" type="text" placeholder="Enter Email" required="" aria-required="true">
              </div>
             
              <div class="form-group">                                              
                <input id="password" type="password" class="form-control" name="password" placeholder="********" required="required">
                <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
              </div>

              <div class="form-group">
               <a href="iniciarsesion.php"><button id="atras">ATRAS</button></a>
              </div>

              <div class="form-group">
                <div class="btn_uy">
                  <a href="#"><span>Ingresar</span></a>


                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      </div>
    </section>
    </a>

    <style>
 /* =======================================================================
Template Name: Youtubers
Author:  SmartEye Technologies
Author URI: www.smarteyeapps.com
Version: 1.0
coder name:Prabin Raja
Description: This Template is created for Youtubers
======================================================================= */
/* ===================================== Import Variables ================================== */
@import url(https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700);
@import url(https://fonts.googleapis.com/css?family=Arimo:300,400,400italic,700,700italic);
/* ===================================== Basic CSS ==================================== */
* {
  margin: 0px;
  padding: 0px;
  list-style: none; 
}

#atras{
    background: #37a000;
    border: 0px;
    border-radius: 5px; /* Radio de la esquina del borde del botón */
    cursor: pointer;
    width: 100px;
    height: 50px;
    color: #fff;
}
img {
  max-width: 100%; 
}

a {
  text-decoration: none;
  outline: none;
  color: #444; 
}

a:hover {
  color: #444; 
}

ul {
  margin-bottom: 0;
  padding-left: 0; 
}

a:hover,
a:focus,
input,
textarea {
  text-decoration: none;
  outline: none; 
}


.form-01-main,html,body{
  height: 100%;

}
.form-01-main {
    padding: 40px 0px;
    background: url(../images/bg-01.jpg);
    background-position: center;
    background-size: 100%;
    background-repeat: no-repeat;
    position: relative;
    text-align: center;
     
    width:100%;
    z-index: 1;
}

.form-cover {
    position: absolute;
    content: "";
    background: rgba(0,0,0,0.8);
    bottom: 0;
    top: 0;
    width: 100%;
    left: 0;
    z-index: -1;
    height: 100%;
    overflow: auto;
}

.form-sub-main{
    max-width:500px;
    width:100%;
    display:block;
    margin:20px auto;
    background:rgba(0,0,0,0.8);
    padding: 45px 60px 46px;

}
 @media screen and (max-width:767px){
      .form-sub-main{
        padding: 30px;
      }
  }

.form-control {
    min-height: 50px;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: 1px solid rgba(255, 255, 255, 0.3);
    padding: 10px 15px;
    background-color: transparent;
    color: #fff;
    margin:30px 0px;
}

.form-sub-main{
    color:#545454;
    font-size:16px;
    margin-top: 5%;
}

.form-sub-main .form-group label{
    display:block;
    margin-bottom:6px;
    color:#fff;
}

.form-group{
    position:relative;
    z-index:9;
}

.toggle-password{
    position:absolute;
    right:8px;
    bottom:18px;
}

.form-group .form-control:focus{
    background:transparent;
    box-shadow:none;
    border-color:#495057;
    color:#495057;
}

.check_box_main{
  display:inline-block;
  width:100%;
  text-align:center;
}

.btn_uy{
  position:relative;
  z-index:9;
  display:block;
  margin:20px 0px;
}

.btn_uy a {
    padding: 10px 20px;
    background: #37a000;
    text-transform: uppercase;
    text-align: center;
    font-size: 16px;
    font-weight: 400;
    white-space: nowrap;
    line-height: normal;
    border-radius: 5px;
    color: #fff;
    width: 100%;
    position: relative;
    display: inline-block;
    cursor:pointer;
}

._main_head_as{
  margin:20px 0 25px 0px;
  display:inline-block;
  z-index:2;
  position:relative; 
}

._main_head_as a img{
  height:100px;
  width:100px;
  position:relative;
  border-radius:50px;
}


body {
  background-image: url('https://media.istockphoto.com/id/1570960455/es/foto/cerdito-frente-a-un-grupo-de-animales-dom%C3%A9sticos-en-un-campo-rural.webp?b=1&s=612x612&w=0&k=20&c=XourcqIEbRHj6kn8dAgNFyN0wU2sQaxSxcx2-aHVhaI=');

  background-size: cover;
  background-repeat: no-repeat;
}
        </style>
  </body>

</html>