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
