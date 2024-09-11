<?php
session_start();
require_once '../conexion/dbconect.php';

class Animal {
    private $conn;

    public function __construct() {
        $db = new Connection();
        $this->conn = $db->open();
    }

    public function delete($idAnimal) {
        $sql = "DELETE FROM animales WHERE Idanimal = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$idAnimal]);
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Idanimal'])) {
  
    $idAnimal = $_POST['Idanimal'];

    
    $animal = new Animal();
    if ($animal->delete($idAnimal)) {
        $_SESSION['message'] = 'Animal eliminado correctamente.';
    } else {
        $_SESSION['message'] = 'Error al eliminar el animal.';
    }

    
    header("Location: animales.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Animal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Eliminar Animal</h1>

        <?php
        if (isset($_SESSION['message'])) {
            echo '<div class="alert alert-info">' . $_SESSION['message'] . '</div>';
            unset($_SESSION['message']);
        }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="mb-3">
                <label for="Idanimal" class="form-label">Seleccione el Animal a Eliminar:</label>
                <select class="form-control" id="Idanimal" name="Idanimal" required>
                    <option value="">Seleccione un animal</option>
                    <?php
                    
                    $db = new Connection();
                    $conn = $db->open();
                    $sql = "SELECT * FROM animales";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $animales = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($animales as $animal) {
                        echo '<option value="' . $animal['Idanimal'] . '">' . $animal['tipo_animal'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
</body>
</html>
