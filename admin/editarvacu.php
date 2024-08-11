<?php
require_once '../conexion/dbconect.php';

class Vacuna {
    private $conn;

    public function __construct() {
        $db = new Connection();
        $this->conn = $db->open();
    }

    public function getById($id) {
        $sql = "SELECT * FROM vacunas WHERE Idvacuna=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(); //
    }

    public function update($id, $edadAnimal, $nombreVacuna, $descripcion, $unidades, $fechaAplicacion) {
        $sql = "UPDATE vacunas SET edad_animal=?, nombre_vacuna=?, descripcion=?, unidades=?, fecha_aplicacion=? WHERE Idvacuna=?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$edadAnimal, $nombreVacuna, $descripcion, $unidades, $fechaAplicacion, $id]);
    }
}

$datosVacuna = null; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'] ?? null;
    $edadAnimal = $_POST['edad_animal'] ?? '';
    $nombreVacuna = $_POST['nombre_vacuna'] ?? '';
    $descripcion = $_POST['descripcion'] ?? '';
    $unidades = $_POST['unidades'] ?? '';
    $fechaAplicacion = $_POST['fecha_aplicacion'] ?? '';

    
    if ($id && $edadAnimal !== '' && $nombreVacuna !== '' && $descripcion !== '' && $unidades !== '' && $fechaAplicacion !== '') {
       
        $vacuna = new Vacuna();
        $resultado = $vacuna->update($id, $edadAnimal, $nombreVacuna, $descripcion, $unidades, $fechaAplicacion);

        if ($resultado) {
            
            $_SESSION['message'] = "Vacuna actualizada correctamente.";
            header("Location: vacunas.php");
            exit();
        } else {
          
            echo "Error al actualizar la vacuna.";
        }
    } else {
      
        echo "Todos los campos son requeridos.";
    }
}

// 
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['Idvacuna'])) {
    
    $id = $_GET['Idvacuna'];

    $vacuna = new Vacuna();
    $datosVacuna = $vacuna->getById($id);

    
    if (!$datosVacuna) {
        header("Location: vacunas.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Vacuna</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Vacuna</h1>
        <?php if (isset($_SESSION['message'])) : ?>
            <div class="alert alert-success"><?php echo $_SESSION['message']; ?></div>
            <?php unset($_SESSION['message']); ?>
        <?php endif; ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="hidden" name="id" value="<?php echo isset($datosVacuna['Idvacuna']) ? $datosVacuna['Idvacuna'] : ''; ?>">
            <div class="form-group">
                <label for="edad_animal">Edad del Animal:</label>
                <input type="text" class="form-control" id="edad_animal" name="edad_animal" value="<?php echo isset($datosVacuna['edad_animal']) ? $datosVacuna['edad_animal'] : ''; ?>">
            </div>
            <div class="form-group">
                <label for="nombre_vacuna">Nombre de la Vacuna:</label>
                <input type="text" class="form-control" id="nombre_vacuna" name="nombre_vacuna" value="<?php echo isset($datosVacuna['nombre_vacuna']) ? $datosVacuna['nombre_vacuna'] : ''; ?>">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo isset($datosVacuna['descripcion']) ? $datosVacuna['descripcion'] : ''; ?>">
            </div>
            <div class="form-group">
                <label for="unidades">Unidades:</label>
                <input type="number" class="form-control" id="unidades" name="unidades" value="<?php echo isset($datosVacuna['unidades']) ? $datosVacuna['unidades'] : ''; ?>">
            </div>
            <div class="form-group">
                <label for="fecha_aplicacion">Fecha de Aplicación:</label>
                <input type="date" class="form-control" id="fecha_aplicacion" name="fecha_aplicacion" value="<?php echo isset($datosVacuna['fecha_aplicacion']) ? $datosVacuna['fecha_aplicacion'] : ''; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</body>
</html>
