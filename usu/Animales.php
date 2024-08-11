<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menú Interactivo</title>
        <link rel="stylesheet" href="animales.css">
    </head>
    <body>
        <body background=""></body>
    
        <header>
            <h1>ANIMALES</h1>
            <a href="index.html"><button id="p1">Inicio</button></a>
      <a href="Animales.php"><button id="p2">Animales</button></a>
      <a href="Alimentos.php"><button id="p3">Alimentos</button></a>
      <a href="Iniciarsesion.php"><button id="p4">Iniciar Sesion</button></a>
  </div>
        </header>
       
        <div class="content">
            <button id="categoryBtn" class="menuBtn">Categoría</button>
            <div id="categoryMenu" style="display: none;">
                <button class="subcategoryBtn" data-subcategory="aves">Aves</button>
                <div class="elementor-text-editor elementor-clearfix">
                    <h1>Aves</h1>
                    <p>Las aves de granja suelen ser criadas con la finalidad de servir como alimentos. Por ello, es común que estos lugares especializados intenten criar a estos animales con los menores costos posible y con las mayores ganancias que se puedan obtener de los mismos. </p>
                    <img decoding="async" data-toggle="premium-modal" data-target="#premium-modal-17224f4" class="premium-modal-trigger-img" src="https://c.pxhere.com/photos/ab/3c/haan_cocks_green_grass_chicken_animals_farm_mohawk-718313.jpg!d" alt="TilapiaFea1" width="1000px">
                </div>
                <div class="foodButtons">
                    
                </div>
                <div class="subcategoryMenu" style="display: none;" data-subcategory="aves">
                    <button class="foodBtn menuBtn" data-food="Alimento1">Gallinas</button>
                    <h1>tipos de gallinas</h1>
                    <p>Los tipos de gallinas se pueden clasificar según su función, su origen o sus características123.Algunas razas de gallinas son123:
                        Leghorn: una gallina ponedora de origen italiano, de plumaje blanco y cresta roja.
                        Lohmann Brown: una gallina ponedora de origen alemán, de plumaje marrón y alta producción de huevos.
                        Babcock: una gallina ponedora de origen estadounidense, de plumaje blanco y tamaño pequeño.
                        Isa Brown: una gallina ponedora de origen francés, de plumaje rojizo y buena adaptación a diferentes climas.
                        Ross: una gallina de carne de origen británico, de plumaje blanco y rápido crecimiento.
                        Cobb: una gallina de carne de origen estadounidense, de plumaje blanco y alta conversión alimenticia. </p>
                    <img decoding="async" data-toggle="premium-modal" data-target="#premium-modal-17224f4" class="premium-modal-trigger-img" src="https://curiosfera-animales.com/wp-content/uploads/2018/01/Razas-de-gallinas.png" alt="TilapiaFea1" width="1000px">

                    <div class="foodButtons">
                        <button onclick="añadir()">Añadir</button>
                        <button onclick="eliminar()">Eliminar</button>
                        <button onclick="editar()">Editar</button>
                        <button onclick="actualizar()">Actualizar</button>
                    </div>
        
                    <button class="foodBtn menuBtn" data-food="Alimento2">Patos</button>
                    <h1>tipos de patos</h1>
                    <p>Los tipos de gallinas se pueden clasificar según su función, su origen o sus características123.Algunas razas de gallinas son123:
                        Leghorn: una gallina ponedora de origen italiano, de plumaje blanco y cresta roja.
                        Lohmann Brown: una gallina ponedora de origen alemán, de plumaje marrón y alta producción de huevos.
                        Babcock: una gallina ponedora de origen estadounidense, de plumaje blanco y tamaño pequeño.
                        Isa Brown: una gallina ponedora de origen francés, de plumaje rojizo y buena adaptación a diferentes climas.
                        Ross: una gallina de carne de origen británico, de plumaje blanco y rápido crecimiento.
                        Cobb: una gallina de carne de origen estadounidense, de plumaje blanco y alta conversión alimenticia. </p>
                    <img decoding="async" data-toggle="premium-modal" data-target="#premium-modal-17224f4" class="premium-modal-trigger-img" src="https://th.bing.com/th/id/R.04430650bb849db008f0826f10417dad?rik=bak4rcm8bpC06g&pid=ImgRaw&r=0" alt="TilapiaFea1" width="1000px">


                    <div class="foodButtons">
                        <button onclick="añadir()">Añadir</button>
                        <button onclick="eliminar()">Eliminar</button>
                        <button onclick="editar()">Editar</button>
                        <button onclick="actualizar()">Actualizar</button>
                    </div>
        
                    <button class="foodBtn menuBtn" data-food="Alimento3">Pavos</button>
                    <h1>tipos de patos</h1>
                    <p>Los tipos de gallinas se pueden clasificar según su función, su origen o sus características123.Algunas razas de gallinas son123:
                        Leghorn: una gallina ponedora de origen italiano, de plumaje blanco y cresta roja.
                        Lohmann Brown: una gallina ponedora de origen alemán, de plumaje marrón y alta producción de huevos.
                        Babcock: una gallina ponedora de origen estadounidense, de plumaje blanco y tamaño pequeño.
                        Isa Brown: una gallina ponedora de origen francés, de plumaje rojizo y buena adaptación a diferentes climas.
                        Ross: una gallina de carne de origen británico, de plumaje blanco y rápido crecimiento.
                        Cobb: una gallina de carne de origen estadounidense, de plumaje blanco y alta conversión alimenticia. </p>
                    <img decoding="async" data-toggle="premium-modal" data-target="#premium-modal-17224f4" class="premium-modal-trigger-img" src="https://th.bing.com/th/id/OIP.eLT3c6CzxcLZ3SKHHykvOwHaE8?rs=1&pid=ImgDetMain" alt="TilapiaFea1" width="1000px">



                    <div class="foodButtons">
                        <button onclick="añadir()">Añadir</button>
                        <button onclick="eliminar()">Eliminar</button>
                        <button onclick="editar()">Editar</button>
                        <button onclick="actualizar()">Actualizar</button>
                    </div>
                </div>
                
                <button class="subcategoryBtn" data-subcategory="ganado">Ganado</button>
                <div class="elementor-text-editor elementor-clearfix">
                    <h1>ganado</h1>
                    <p>Según la especie domesticada o criada, el ganado se clasifican en: Ganado vacuno o bovino: Es el conjunto de vacas, toros y bueyes (diferentes tipos de vacas). Por extensión se le conoce simplemente como ganado propiamente dicho. Ganado ovino: Es un conjunto de ovejas y corderos; Ganado porcino</p>
                    <img decoding="async" data-toggle="premium-modal" data-target="#premium-modal-17224f4" class="premium-modal-trigger-img" src="https://www.liderempresarial.com/wp-content/uploads/2020/05/ganado.jpg" alt="TilapiaFea1" width="1000px">
               </div>
                <div class="subcategoryMenu" style="display: none;" data-subcategory="ganado">
                    <button class="foodBtn menuBtn" data-food="Alimento4">Vacas</button>

                    <h1>vacas</h1>
                    <p>Según la especie domesticada o criada, el ganado se clasifican en: Ganado vacuno o bovino: Es el conjunto de vacas, toros y bueyes (diferentes tipos de vacas). Por extensión se le conoce simplemente como ganado propiamente dicho. Ganado ovino: Es un conjunto de ovejas y corderos; Ganado porcino</p>
                    <img decoding="async" data-toggle="premium-modal" data-target="#premium-modal-17224f4" class="premium-modal-trigger-img" src="https://th.bing.com/th/id/R.d2e41f956e077f42e1b79e5198103765?rik=E0llUqVqyQwVqA&pid=ImgRaw&r=0" alt="TilapiaFea1" width="1000px">
               
                    <div class="foodButtons">
                        <button onclick="añadir()">Añadir</button>
                        <button onclick="eliminar()">Eliminar</button>
                        <button onclick="editar()">Editar</button>
                        <button onclick="actualizar()">Actualizar</button>
                    </div>
        
                    <button class="foodBtn menuBtn" data-food="Alimento5">Cerdos</button>

                    <h1>Cerdos</h1>
                    <p>Según la especie domesticada o criada, el ganado se clasifican en: Ganado vacuno o bovino: Es el conjunto de vacas, toros y bueyes (diferentes tipos de vacas). Por extensión se le conoce simplemente como ganado propiamente dicho. Ganado ovino: Es un conjunto de ovejas y corderos; Ganado porcino</p>
                    <img decoding="async" data-toggle="premium-modal" data-target="#premium-modal-17224f4" class="premium-modal-trigger-img" src="https://th.bing.com/th/id/R.fdfc399a5b3f035cc2cd2605e698349a?rik=F9uZ6BRb%2bRVgBw&riu=http%3a%2f%2fstatic6.depositphotos.com%2f1008660%2f602%2fi%2f450%2fdepositphotos_6020108-stock-photo-young-pig-on-a-green.jpg&ehk=MJzisfFNkK7Hf3DOV6v%2ffQiWW9ryXdufNaj2ayVInYI%3d&risl=&pid=ImgRaw&r=0" alt="TilapiaFea1" width="1000px">
               
                    <div class="foodButtons">
                        <button onclick="añadir()">Añadir</button>
                        <button onclick="eliminar()">Eliminar</button>
                        <button onclick="editar()">Editar</button>
                        <button onclick="actualizar()">Actualizar</button>
                    </div>
        
                    <button class="foodBtn menuBtn" data-food="Alimento6">Ovejas</button>
                    <h1>ovejas</h1>
                    <p>Según la especie domesticada o criada, el ganado se clasifican en: Ganado vacuno o bovino: Es el conjunto de vacas, toros y bueyes (diferentes tipos de vacas). Por extensión se le conoce simplemente como ganado propiamente dicho. Ganado ovino: Es un conjunto de ovejas y corderos; Ganado porcino</p>
                    <img decoding="async" data-toggle="premium-modal" data-target="#premium-modal-17224f4" class="premium-modal-trigger-img" src="https://img.interempresas.net/fotos/P2175559.jpeg" alt="TilapiaFea1" width="1000px">
               
                    <div class="foodButtons">
                        <button onclick="añadir()">Añadir</button>
                        <button onclick="eliminar()">Eliminar</button>
                        <button onclick="editar()">Editar</button>
                        <button onclick="actualizar()">Actualizar</button>
                    </div>
                </div>
                
                <button class="subcategoryBtn" data-subcategory="peces">Peces</button>
                <div class="elementor-text-editor elementor-clearfix">
                    <h1>peces</h1>
                    <p>Criados en una granjas Los peces criados en granjas se producen comercialmente en corrales controlados que existen dentro de lagos, océanos o ríos, así como peces criados en tanques grandes. Los peces en granjas se crían para que sea más barato y esté más disponible para los consumidores.</p>
                    <img decoding="async" data-toggle="premium-modal" data-target="#premium-modal-17224f4" class="premium-modal-trigger-img" src="https://th.bing.com/th/id/R.3f19b0a4da0e1c27ef4b7bc76dcecd6f?rik=lbCPgmfiBbHZWg&pid=ImgRaw&r=0" alt="TilapiaFea1" width="1000px">
               </div>
                
                    
                </div>
                <div class="subcategoryMenu" style="display: none;" data-subcategory="peces">
                    <button class="foodBtn menuBtn" data-food="Alimento7">Salmón</button>
                    <div class="foodButtons">
                        <h1>salmon</h1>
                    <p>Según la especie domesticada o criada, el ganado se clasifican en: Ganado vacuno o bovino: Es el conjunto de vacas, toros y bueyes (diferentes tipos de vacas). Por extensión se le conoce simplemente como ganado propiamente dicho. Ganado ovino: Es un conjunto de ovejas y corderos; Ganado porcino</p>
                    <img decoding="async" data-toggle="premium-modal" data-target="#premium-modal-17224f4" class="premium-modal-trigger-img" src="https://www.pacificseafood.com/pac-incoming/2018/05/Atlantic_Salmon_Whole.jpg" alt="TilapiaFea1" width="1000px">
                        <button onclick="añadir()">Añadir</button>
                        <button onclick="eliminar()">Eliminar</button>
                        <button onclick="editar()">Editar</button>
                        <button onclick="actualizar()">Actualizar</button>
                    </div>
        
                    <button class="foodBtn menuBtn" data-food="Alimento8">Atún</button>
                    <h1>atun</h1>
                    <p>Según la especie domesticada o criada, el ganado se clasifican en: Ganado vacuno o bovino: Es el conjunto de vacas, toros y bueyes (diferentes tipos de vacas). Por extensión se le conoce simplemente como ganado propiamente dicho. Ganado ovino: Es un conjunto de ovejas y corderos; Ganado porcino</p>
                    <img decoding="async" data-toggle="premium-modal" data-target="#premium-modal-17224f4" class="premium-modal-trigger-img" src="https://th.bing.com/th/id/R.1cea95a43d04720fe07ee6309d9f6def?rik=CK70dFgUWJ4%2feA&riu=http%3a%2f%2festaticos.ipmedios.com%2fmedia%2f1%2fe%2fec3da1995994c35ae4983cdc35918e47-original.jpg&ehk=2VDrMB90ydgsfvIOKF%2bxBcodo%2b5%2bBvnKcDnEHSB4bNw%3d&risl=&pid=ImgRaw&r=0" alt="TilapiaFea1" width="1000px">
                    <div class="foodButtons">
                        <button onclick="añadir()">Añadir</button>
                        <button onclick="eliminar()">Eliminar</button>
                        <button onclick="editar()">Editar</button>
                        <button onclick="actualizar()">Actualizar</button>
                    </div>
        
                    <button class="foodBtn menuBtn" data-food="Alimento9">Trucha</button>
                    <h1>trucha</h1>
                    <p>Según la especie domesticada o criada, el ganado se clasifican en: Ganado vacuno o bovino: Es el conjunto de vacas, toros y bueyes (diferentes tipos de vacas). Por extensión se le conoce simplemente como ganado propiamente dicho. Ganado ovino: Es un conjunto de ovejas y corderos; Ganado porcino</p>
                    <img decoding="async" data-toggle="premium-modal" data-target="#premium-modal-17224f4" class="premium-modal-trigger-img" src="https://th.bing.com/th/id/OIP.IR2mTBlwhTD5EVvWDMsgQAHaFj?rs=1&pid=ImgDetMain" alt="TilapiaFea1" width="1000px">
                    <div class="foodButtons">
                        <button onclick="añadir()">Añadir</button>
                        <button onclick="eliminar()">Eliminar</button>
                        <button onclick="editar()">Editar</button>
                        <button onclick="actualizar()">Actualizar</button>
                    </div>
                </div>
            </div>
        </div>
            
<div id="foodInfo" style="display: none;"></div>

            </div>
    
            <div id="foodInfo" class="info">
                <!-- Aquí se mostrará la información del alimento seleccionado -->
            </div>
        </div>
    
        <script src="animales.js"></script>
        
        
        <div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7f73d24" data-id="7f73d24" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-8bc18b5 elementor-widget elementor-widget-heading" data-id="8bc18b5" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Animales de Granja</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-33928cf elementor-widget elementor-widget-text-editor" data-id="33928cf" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p>Los alimentos para animales de granja fabricados en Tecnutral garantizan nutrición, rentabilidad de inversión y mejores resultados. Desde alimento para animales pequeños como conejos, hasta vacas y caballos; nuestros productos contienen un balance idóneo de vitaminas, proteínas y minerales. Sus presentaciones son extruido, pellet o harinas.
                
                </p>	
            <p>Vacas, toros y bueyes.
                Caballos, yeguas, asnos y mulas.
                Gallos y gallinas, así como patos, gansos y pavos.
                Ovejas, carneros y cabras.
                Cerdos.
                Perros y gatos.
                Truchas y salmones (en las granjas piscícolas).
                
                
                Fuente:</p>				</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
        
				<section class="elementor-section elementor-top-section elementor-element elementor-element-621dc62 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="621dc62" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-8791bf7" data-id="8791bf7" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-b678e0e elementor-widget elementor-widget-heading" data-id="b678e0e" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default"></h2>		</div>
				</div>
				<div class="elementor-element elementor-element-17224f4 elementor-widget elementor-widget-premium-addon-modal-box" data-id="17224f4" data-element_type="widget" id="acuicola" data-settings="{&quot;premium_modal_box_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="premium-addon-modal-box.default">
				<div class="elementor-widget-container">
			
		<div class="premium-modal-box-container" data-settings="{&quot;trigger&quot;:&quot;image&quot;}">
			<div class="premium-modal-trigger-container">
									<img decoding="async" data-toggle="premium-modal" data-target="#premium-modal-17224f4" class="premium-modal-trigger-img" src="https://1.bp.blogspot.com/-D6SH4kvkq50/VKv13yrm7XI/AAAAAAAAAUE/l4lio2BPN-g/s1600/PicMonkey+Collage.jpg" alt="TilapiaFea1">
							</div>

                            <nav>
                                <a href="cerrar_sesion.html" style="float:right">Cerrar Sesión</a>
                            </nav>
                        
       
    <style>
        nav {
    background-color: #B8EB25;
    overflow: hidden;
    text-align:center ;
    background-color: #333; /* Color de fondo del menú */
    padding: 35px;
}

nav a {
   
    overflow: hidden;
    color: white;
    text-align: center;
    padding: 4px 16px;
    text-decoration: none;
}

nav a:hover {
    background-color: #ddd;
    color: black;
}
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
}

header {

background-color:#27d821 ;
    color: white;
    text-align: center;
    padding: 10px;
}

.content {
    padding: 16px;
    text-align: left;

}

.menuBtn {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    
}
.subcategoryBtn{background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    border-radius: 5px;

    margin-top: 10px;
}
.menu {
    
    
    display: none;
    margin-top: 10px;
}

.foodBtn {
    display: inline-block;
color: #050705;
text-transform: uppercase;
text-decoration: none;
font-weight: 700;
margin: 25px;
    background-color: #c0cccf;
}

.info {
    padding: 0PX;
    text-align: left;
    margin-top: 20px;
    font-size: 40px;
}

.foodImage {
    text-align: left;
    max-width: 100%;
    height: auto;
    margin-top: 1%;
    padding: 2%;
}
.elementor-row {
    background-color: #76bbaf;
    text-align: center;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;

}
.elementor-text-editor
{
    font-size: 24px;
    font-style: italic;
    text-align: center;
    font-family: Arial, sans-serif;


}
.subcategory-column {
    display: flex;
    flex-direction: column;
}

.subcategoryMenu {
    margin-bottom: 20px; /* Espacio entre cada subcategoría */
}

    </style>
    </body>
    </html>