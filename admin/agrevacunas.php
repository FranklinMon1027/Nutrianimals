<?php
require_once '../conexion/dbconect.php';

class Vacuna {
    private $conn;

    public function __construct() {
        $db = new Connection();
        $this->conn = $db->open();
    }

    public function create($nombreVacuna, $edadAnimal, $descripcion, $unidades, $fechaAplicacion, $idAnimal) {
        $sql = "INSERT INTO vacunas (nombre_vacuna, edad_animal, descripcion, unidades, fecha_aplicacion, Idanimal) 
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$nombreVacuna, $edadAnimal, $descripcion, $unidades, $fechaAplicacion, $idAnimal]);
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombreVacuna = $_POST['nombre_vacuna'];
    $edadAnimal = $_POST['edad_animal'];
    $descripcion = $_POST['descripcion'];
    $unidades = $_POST['unidades'];
    $fechaAplicacion = $_POST['fecha_aplicacion'];
    $idAnimal = $_POST['Idanimal'];

    
    $vacuna = new Vacuna();
    $vacuna->create($nombreVacuna, $edadAnimal, $descripcion, $unidades, $fechaAplicacion, $idAnimal);

  
    header("Location: vacunas.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Vacuna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Agregar Vacuna</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="mb-3">
                <label for="nombre_vacuna" class="form-label">Nombre de la Vacuna:</label>
                <input type="text" class="form-control" id="nombre_vacuna" name="nombre_vacuna" required>
            </div>
            <div class="mb-3">
                <label for="edad_animal" class="form-label">Edad del Animal:</label>
                <input type="number" class="form-control" id="edad_animal" name="edad_animal" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" required>
            </div>
            <div class="mb-3">
                <label for="unidades" class="form-label">Unidades:</label>
                <input type="number" class="form-control" id="unidades" name="unidades" required>
            </div>
            <div class="mb-3">
                <label for="fecha_aplicacion" class="form-label">Fecha de Aplicación:</label>
                <input type="date" class="form-control" id="fecha_aplicacion" name="fecha_aplicacion" required>
            </div>
            <div class="mb-3">
                <label for="Idanimal" class="form-label">ID del Animal:</label>
                <input type="number" class="form-control" id="Idanimal" name="Idanimal" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
</body>
</html>
