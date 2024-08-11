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
        <link rel="stylesheet" href="alimentos.css">
    </head>
    <body>
        <body background=""></body>
    
        <header>
            <h1>ALIMENTOS</h1>
            <div class="start" id="Botpa">
      <a href="index.html"><button id="p1">Inicio</button></a>
      <a href="Animales.php"><button id="p2">Animales</button></a>
      <a href="Alimentos.php"><button id="p3">Alimentos</button></a>
      <a href="Iniciarsesion.php"><button id="p4">Iniciar Sesion</button></a>
  </div>
        </header>
       
  <style>

  </style>
        <div class="content">
            <button id="categoryBtn" class="menuBtn">Categoría</button>
            <div id="categoryMenu" class="menu">
                <button class="subBtn menuBtn">Subcategoría</button>
                <div id="subcategoryMenu" class="menu">
                    <button class="foodBtn menuBtn" data-food="Alimento1">semillas y granos</button>
                    <button class="foodBtn menuBtn" data-food="Alimento2">procesados</button>
                    <button class="foodBtn menuBtn" data-food="Alimento3">vitaminas y proteinas</button>
                    <button class="foodBtn menuBtn" data-food="Alimento4">medicamentos</button>
                </div>
            </div>
    
            <div id="foodInfo" class="info">
                <!-- Aquí se mostrará la información del alimento seleccionado -->
            </div>
        </div>
    
        <script src="script.js"></script>
        
        
        <div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7f73d24" data-id="7f73d24" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-8bc18b5 elementor-widget elementor-widget-heading" data-id="8bc18b5" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Alimentación para Animales de Granja</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-33928cf elementor-widget elementor-widget-text-editor" data-id="33928cf" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p>Los alimentos para animales de granja fabricados en Tecnutral garantizan nutrición, rentabilidad de inversión y mejores resultados. Desde alimento para animales pequeños como conejos, hasta vacas y caballos; nuestros productos contienen un balance idóneo de vitaminas, proteínas y minerales. Sus presentaciones son extruido, pellet o harinas.</p>					</div>
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
									<img decoding="async" data-toggle="premium-modal" data-target="#premium-modal-17224f4" class="premium-modal-trigger-img" src="https://tecnutral.com/wp-content/uploads/2018/10/Vaca.jpg" alt="TilapiaFea1">
							</div>

    
                            
                        
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
    border-radius: 20px;

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
    background-color: #1c8f1f;
    color: white;
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
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
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const categoryBtn = document.getElementById('categoryBtn');
    const categoryMenu = document.getElementById('categoryMenu');
    const subcategoryMenu = document.getElementById('subcategoryMenu');
    const foodInfo = document.getElementById('foodInfo');
    
    categoryBtn.addEventListener('click', function () {
        toggleVisibility(categoryMenu);
    });

    const subBtns = document.querySelectorAll('.subBtn');
    subBtns.forEach(subBtn => {
        subBtn.addEventListener('click', function () {
            toggleVisibility(subcategoryMenu);
        });
    });

    const foodBtns = document.querySelectorAll('.foodBtn');
    foodBtns.forEach(foodBtn => {
        foodBtn.addEventListener('click', function () {
            const foodName = this.getAttribute('data-food');
            showFoodInfo(foodName);
        });
    });

    function toggleVisibility(element) {
        if (element.style.display === 'none' || element.style.display === '') {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    }

    function showFoodInfo(foodName) {
        const foodDetails = getFoodDetails(foodName);
        const infoText = `<strong>Nombre:</strong> ${foodDetails.name}<br><br><strong>Descripción:</strong> ${foodDetails.description}`;
        const imageHtml = `<img src="${foodDetails.image}" alt="${foodDetails.name}" class="foodImage">`;
        const buttonsHtml = `
            <div class="foodButtons">
                <button onclick="añadir()">Añadir</button>
                <button onclick="eliminar()">Eliminar</button>
                <button onclick="editar()">Editar</button>
                <button onclick="actualizar()">Actualizar</button>
            </div>
        `;
        foodInfo.innerHTML = `${imageHtml}<br><br>${infoText}${buttonsHtml}`;
        foodInfo.style.display = 'block';
    }

    function getFoodDetails(foodName) {
        const foodDetails = {
            'Alimento1': {
                name: 'semillas',
                description: 'Entre las semillas más representativas están el maíz, frijol, calabaza, chile y amaranto, cada una con propiedades y usos particulares, presentes en nuestra gastronomía y en los usos y costumbres en todo el territorio nacional.',
                image: 'https://th.bing.com/th/id/R.5072a63b6d3522a3392ce2d62d209b21?rik=4OQKcmpCRkNxrg&riu=http%3a%2f%2fwww.gruposacsa.com.mx%2fwp-content%2fuploads%2f2017%2f06%2fgranos-e1497627817769-960x720.jpg&ehk=wX9BsdZdSqsy4PAztgA94Y2KQQPX4C6jo%2bmiXZ2dqH4%3d&risl=&pid=ImgRaw&r=0'
            },
            'Alimento2': {
                name: 'procesados',
                description: 'Descripción del Alimento 2',
                image: 'https://th.bing.com/th/id/OIP.axKur5VVD6dby5AsUIqOlwHaEK?w=306&h=180&c=7&r=0&o=5&pid=1.7'
            },
            'Alimento3': {
                name: 'vitaminas y proteinas',
                description: 'Descripción del Alimento 3',
                image: 'https://th.bing.com/th/id/R.5072a63b6d3522a3392ce2d62d209b21?rik=4OQKcmpCRkNxrg&riu=http%3a%2f%2fwww.gruposacsa.com.mx%2fwp-content%2fuploads%2f2017%2f06%2fgranos-e1497627817769-960x720.jpg&ehk=wX9BsdZdSqsy4PAztgA94Y2KQQPX4C6jo%2bmiXZ2dqH4%3d&risl=&pid=ImgRaw&r=0'
            },
            'Alimento4': {
                name: 'medicamentos',
                description: 'Descripción del Alimento 4',
                image: 'https://th.bing.com/th/id/R.5072a63b6d3522a3392ce2d62d209b21?rik=4OQKcmpCRkNxrg&riu=http%3a%2f%2fwww.gruposacsa.com.mx%2fwp-content%2fuploads%2f2017%2f06%2fgranos-e1497627817769-960x720.jpg&ehk=wX9BsdZdSqsy4PAztgA94Y2KQQPX4C6jo%2bmiXZ2dqH4%3d&risl=&pid=ImgRaw&r=0'
            }
        };

        return foodDetails[foodName] || {};
    }
});

    </script>
    </body>
    </html>
    