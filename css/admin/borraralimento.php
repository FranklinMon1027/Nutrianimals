<?php
session_start();
include_once('../conexion/dbconect.php');

class Alimento {
    private $conn;

    public function __construct() {
        $db = new Connection();
        $this->conn = $db->open();
    }

    public function delete($Idalimento, $tipo_alimento) {
        $sql = "DELETE FROM alimentos WHERE Idalimento = ? AND tipo_alimento = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$Idalimento, $tipo_alimento]);
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $Idalimento = $_POST['Idalimento'];
    $tipo_alimento = $_POST['tipo_alimento'];


    $alimento = new Alimento();
    $alimento->delete($Idalimento, $tipo_alimento);

    
    header("Location: alimentos.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Eliminar Alimento</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Eliminar Alimento</h1>
        <p>¿Estás seguro de que quieres eliminar este alimento?</p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="Idalimento">ID Alimento:</label>
                <input type="text" class="form-control" id="Idalimento" name="Idalimento" required>
            </div>
            <div class="form-group">
                <label for="tipo_alimento">Tipo de Alimento:</label>
                <input type="text" class="form-control" id="tipo_alimento" name="tipo_alimento" required>
            </div>
            <button type="submit" class="btn btn-danger">Eliminar</button>
            <a href="alimentos.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>

