<!DOCTYPE html>
<html lang="en">
<head>
    <title>Productos</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Productos</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="Productos.css">
</head>
<style>
      .start {
         margin-left: 580px;
         background-color: rgb(26, 255, 0);
         font-family: Arial, sans-serif;
         margin: 0;
         padding: 20px;
      }
      #p1{
margin-left: 580px;
}
   </style>
<div class="start" id="Botpa">
   <center><img class="imagen" src="./LOGO.png" alt=""></center>
   <a href="index.html"><button id="p1">Inicio</button></a>
   <a href="Animales.php"><button id="p2">Animales</button></a>
   <a href="Alimentos.php"><button id="p3">Alimentos</button></a>
   <a href="Iniciarsesion.php"><button id="p4">Iniciar Sesión</button></a>
</div>

      <div class="col-lg-2 d-none d-lg-block p-2 text-end">
        <button class="btn px-4 rounded-0 fw-bolder btn-outline-primary"> <i class="bi bi-basket"></i> Carro (1)</button>
    </div>
  </div>
  
  <!-- Aquí va el contenido de tu página -->

  <div class="overlay" style="display:none"></div>
<div class="search-section">
  <div class="container-fluid container-xl">
    <div class="row main-content ml-md-0">
      <div class="sidebar col-md-3 px-0">
        <h1 class="border-bottom filter-header d-flex d-md-none p-3 mb-0 align-items-center">
          <span class="mr-2 filter-close-btn">
            X
          </span>
          Filters
          <span class="ml-auto text-uppercase">Reset Filters</span>
        </h1>
        <div class="sidebar__inner ">
          <div class="filter-body">
            <div>
              <h2 class="border-bottom filter-title">Opciones de busqueda</h2>
              <div class="mb-30 filter-options">
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="Indoor" checked>
                  <label class="custom-control-label" for="Indoor">Interior</label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="Outdoor">
                  <label class="custom-control-label" for="Outdoor">Exterior</label>
                </div>
              </div>
              <!--seating option end-->
              <h2 class="font-xbold body-font border-bottom filter-title">Alimentos para:</h2>
              <div class="mb-3 filter-options" id="cusine-options">
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="Vacas" checked>
                  <label class="custom-control-label" for="Vacas">Vacas</label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="Caballos">
                  <label class="custom-control-label" for="Caballos">Caballos</label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="Toros">
                  <label class="custom-control-label" for="Toros">Toros</label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="Peces">
                  <label class="custom-control-label" for="Peces">Peces</label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="Gallinas">
                  <label class="custom-control-label" for="Gallinas">Gallinas</label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="Cerdos">
                  <label class="custom-control-label" for="Cerdos">Cerdos</label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="Otros">
                  <label class="custom-control-label" for="Otros">Otros</label>
                </div>
              </div>

              <!-- cusine filters end -->
              <h2 class="font-xbold body-font border-bottom filter-title">Rango de precio</h2>
              <div class="mb-3 theme-clr xs2-font d-flex justify-content-between">
                <span id="slider-range-value1">$30,000</span>
                <span id="slider-range-value2">$500,000</span>
              </div>
              <div class="mb-30 filter-options">
                <div>
                  <div id="slider-range">
                    <form>
                      <div class="form-group">
                        <input type="range" class="form-control-range" id="">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <h2 class="border-bottom filter-title">Medicamentos para:</h2>
              <div class="mb-3 filter-options" id="services-options">
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="Caballos1" checked>
                  <label class="custom-control-label" for="Caballos1">Caballos</label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="Toros1">
                  <label class="custom-control-label" for="Toros1">Toros</label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="Peces1">
                  <label class="custom-control-label" for="Peces1">Peces</label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="Cerdos1">
                  <label class="custom-control-label" for="Cerdos1">Cerdos</label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="Vacas1">
                  <label class="custom-control-label" for="Vacas1">Vacas</label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="Otros1">
                  <label class="custom-control-label" for="Otros1">Otros</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="content col-md-9">
        <div class="d-flex justify-content-between border-bottom align-items-center">
          <h2 class="title">Productos</h2>
          <div class="filters-actions">
            <div>
              <button class="btn filter-btn d-md-none"><svg xmlns="http://www.w3.org/2000/svg" class="mr-2" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                  <path d="M0 0h24v24H0V0z" fill="none" />
                  <path d="M3 18h6v-2H3v2zM3 6v2h18V6H3zm0 7h12v-2H3v2z" />
                </svg>
                Filter</button>
            </div>
            <div class="d-flex align-items-center">

              <div class="dropdown position-relative sort-drop">
                <button type="button" class="btn btn-transparent dropdown-toggle body-clr p-0 py-1 sm-font fw-400 sort-toggle" data-toggle="dropdown">
                  <span class="mr-2 d-md-none">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                      <g>
                        <path d="M0,0h24 M24,24H0" fill="none" />
                        <path d="M7,6h10l-5.01,6.3L7,6z M4.25,5.61C6.27,8.2,10,13,10,13v6c0,0.55,0.45,1,1,1h2c0.55,0,1-0.45,1-1v-6 c0,0,3.72-4.8,5.74-7.39C20.25,4.95,19.78,4,18.95,4H5.04C4.21,4,3.74,4.95,4.25,5.61z" />
                        <path d="M0,0h24v24H0V0z" fill="none" />
                      </g>
                    </svg>
                  </span>
                  <span class="d-md-inline-block ml-md-2 font-semibold">Nuevos Productos</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right p-0 no-caret">
                  <a class="dropdown-item selected" href="javascript:void(0)">Nuevos Productos</a>
                  <a class="dropdown-item" href="javascript:void(0)">Productos Anteriores</a>
                  <a class="dropdown-item" href="javascript:void(0)">Mas Costoso</a>
                  <a class="dropdown-item" href="javascript:void(0)">Mas Barato</a>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="row row-grid">
          <div class="col-md-6 col-lg-4 col-xl-4">
            <img src="https://dummyimage.com/300X400/000/fff" />
          </div>
          <!--col-end-->
          <div class="col-md-6 col-lg-4 col-xl-4">
            <img src="https://dummyimage.com/300X400/000/fff" />
          </div>
          <!--col-end-->
          <div class="col-md-6 col-lg-4 col-xl-4">
            <img src="https://dummyimage.com/300X400/000/fff" />
          </div>
          <!--col-end-->
          <div class="col-md-6 col-lg-4 col-xl-4">
            <img src="https://dummyimage.com/300X400/000/fff" />
          </div>
          <!--col-end-->
          <div class="col-md-6 col-lg-4 col-xl-4">
            <img src="https://dummyimage.com/300X400/000/fff" />
          </div>
          <!--col-end-->
          <div class="col-md-6 col-lg-4 col-xl-4">
            <img src="https://dummyimage.com/300X400/000/fff" />
          </div>
          <!--col-end-->
          <div class="col-md-6 col-lg-4 col-xl-4">
            <img src="https://dummyimage.com/300X400/000/fff" />
          </div>
          <!--col-end-->
          <div class="col-md-6 col-lg-4 col-xl-4">
            <img src="https://dummyimage.com/300X400/000/fff" />
          </div>
          <!--col-end-->
          <div class="col-md-6 col-lg-4 col-xl-4">
            <img src="https://dummyimage.com/300X400/000/fff" />
          </div>
          <!--col-end-->

          <div class="col-md-6 col-lg-4 col-xl-4">
            <img src="https://dummyimage.com/300X400/000/fff" />
          </div>
          <!--col-end-->
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- Bootstrap JS (opcional, si necesitas funcionalidades de Bootstrap que requieran JavaScript) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="js.js"></script>

<style>

#p1 {
    margin-left: 580px;
}

#Botpa{
    background-color: rgb(38, 255, 0);
}


body{font-size:14px;}
span{font-size:14px;}
.overlay {
    background: rgb(0 0 0 / 55%);
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: 1030;
}
.search-section {
  padding: 50px 0;
}
.filter-header {
  font-weight: bold;
  font-size: 30px;
}
.filter-title {
  font-weight: bold;
  font-size: 20px;
  padding-bottom: 14px;
  margin-bottom: 15px;
}
.title {
  font-weight: bold;
  font-size: 20px;
  padding-bottom: 0;
  margin-bottom: 15px;
}
.mb-30 {
  margin-bottom: 30px;
}
.row-grid img{margin-bottom:30px;max-width:100%}
@media (max-width: 767.98px) {
 .filters-actions {
    position: fixed;
    background: #fff;
    display: flex;
    justify-content: center;
    border:0;
    bottom: 0;
    z-index: 1031;
    left: 0;
    right: 0;
    bottom: 0;
    box-shadow: 0px -2px 3px rgb(0 0 0 / 21%);
    -webkit-box-shadow: 0px -2px 3px rgb(0 0 0 / 21%);
    -moz-box-shadow: 0px -2px 3px rgb(0 0 0 / 21%);
    height: 50px;
   }
    .filters-actions>div {
        flex: 1;
        text-align: center;
       
    }
    .filters-actions>div:first-of-type{
    border-right: 1px solid #d6d1ce;
    }
    .filters-actions>div>* {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
}
    /*.no-border-select.sort-select + .select2-container--default .select2-selection--single{
      background-image: none;
      padding:10px;
    }*/
.filter-btn, .filter-btn:hover, .filter-btn:focus, .filter-btn:active {
    padding: 14px 20px;
    height: 50px;
    border: 0;
     position: relative;
    z-index: 1;
    background: #fff;
    border-radius: 0;
}
    .sort-drop .dropdown-menu{
   width: 100%;
    left: 0;
    position: fixed !important;
    transform: translateY(100%) !important;
    bottom: 50px !important;
    top: auto !important;
    text-align: center;
    border-radius: 6px 6px 0 0 !important;
    box-shadow: none !important;
    transition: .3s;
    display: block;
   /* border: 0;*/
    z-index: -11;
    }
     .sort-drop .dropdown-menu .dropdown-item{padding:15px 20px !important;}
    .sort-drop .dropdown-menu .dropdown-item:first-child{
      border-radius: 6px 6px 0 0 !important;
    }
    .sort-drop.show .dropdown-menu{
    transform: translateY(0) !important;
    }
    .btn.sort-toggle{
     background-image: none;
     padding:10px !important;
     width: 100%;
    border: 0;
    height: 50px;
    position: relative;
    z-index: 1;
    background: #fff;
    border-radius: 0;
    font-size: 16px;
    line-height: 22px;
    }
    .sidebar {
    position: fixed;
    transform: translateY(100%);
    -webkit-transform: translateY(100%);
    -moz-transform: translateY(100%);
    -o-transform: translateY(100%);
    transition: .3s;
    -webkit-transition: .3s;
    -moz-transition: .3s;
    -o-transition: .3s;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
   
     background: #fff;
    
   }
   .sidebar.open{
     z-index: 1032;
     transform: translateY(0);
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -o-transform: translateY(0);
   }
   .sidebar__inner {
    padding: 15px;
    height: calc(100% - 58px);
    overflow-y: auto;
   }
   .filter-header{height: 58px;}
   .filter-body{padding-right: 0;}
}

</style>

<script>
// if < then 768
// mobile sorting overlay jquery start
const mediaQuerymobile = window.matchMedia("(max-width: 768.98px)");

if (mediaQuerymobile.matches) {
  $(".sort-drop").on("show.bs.dropdown", function () {
    $(".overlay").show();
  });
  $(".sort-drop").on("hide.bs.dropdown", function () {
    $(".overlay").hide();
  });
}
//  mobile sorting overlay jquery end

// mobile filter jquery start

$(".filter-btn").click(function () {
  $(".sidebar").addClass("open");
  $("body").addClass("overflow-hidden vh-100");
});
$(".filter-close-btn").click(function () {
  $(".sidebar").removeClass("open");
  $("body").removeClass("overflow-hidden vh-100");
});
// mobile filter jquery end

// sidebar sticky
 const mediaQuerySM = window.matchMedia('(min-width: 768px)')
      // if > then = to 768
      if (mediaQuerySM.matches) {
        // sidebar sticky function
         var sidebar = new StickySidebar('.sidebar', {
          topSpacing: 80,
          bottomSpacing: 20,
          containerSelector: '.main-content',
          innerWrapperSelector: '.sidebar__inner'
        });
      }

    </script>



</body>
</html>