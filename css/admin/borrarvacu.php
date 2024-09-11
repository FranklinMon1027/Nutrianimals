<?php
session_start();
require_once '../conexion/dbconect.php';

class Vacuna {
    private $conn;

    public function __construct() {
        $db = new Connection();
        $this->conn = $db->open();
    }

    public function delete($idVacuna) {
        $sql = "DELETE FROM vacunas WHERE Idvacuna = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$idVacuna]);
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Idvacuna'])) {
    
    $idVacuna = $_POST['Idvacuna'];

    
    $vacuna = new Vacuna();
    if ($vacuna->delete($idVacuna)) {
        $_SESSION['message'] = 'Vacuna eliminada correctamente.';
    } else {
        $_SESSION['message'] = 'Error al eliminar la vacuna.';
    }

    
    header("Location: vacunas.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Vacuna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Eliminar Vacuna</h1>

        <?php
        if (isset($_SESSION['message'])) {
            echo '<div class="alert alert-info">' . $_SESSION['message'] . '</div>';
            unset($_SESSION['message']);
        }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="mb-3">
                <label for="Idvacuna" class="form-label">Seleccione la Vacuna a Eliminar:</label>
                <select class="form-control" id="Idvacuna" name="Idvacuna" required>
                    <option value="">Seleccione una vacuna</option>
                    <?php
                    
                    $db = new Connection();
                    $conn = $db->open();
                    $sql = "SELECT * FROM vacunas";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $vacunas = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($vacunas as $vacuna) {
                        echo '<option value="' . $vacuna['Idvacuna'] . '">' . $vacuna['nombre_vacuna'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
</body>
</html>
