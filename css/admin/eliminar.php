<?php
session_start();
require_once '../conexion/dbconect.php';

class Medicamento {
    private $conn;

    public function __construct() {
        $db = new Connection();
        $this->conn = $db->open();
    }

    public function delete($lote) {
        $sql = "DELETE FROM medicamentos WHERE lote=?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$lote]);
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $lote_a_eliminar = $_POST['eliminar_lote'];

   
    $medicamento = new Medicamento();
    if ($medicamento->delete($lote_a_eliminar)) {
        $_SESSION['message'] = 'Medicamento eliminado correctamente.';
    } else {
        $_SESSION['message'] = 'Error al eliminar el medicamento.';
    }

    
    header("Location: listar.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Medicamento por Lote</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Eliminar Medicamento por Lote</h1>

        <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-info"><?php echo $_SESSION['message']; ?></div>
            <?php unset($_SESSION['message']); ?>
        <?php } ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="eliminar_lote">Lote del Medicamento:</label>
                <input type="text" class="form-control" id="eliminar_lote" name="eliminar_lote" required>
            </div>
            <button type="submit" class="btn btn-danger">Eliminar Medicamento</button>
            <a href="listar.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
