<?php
session_start();
require_once '../conexion/dbconect.php';

class Medicamento {
    private $conn;

    public function __construct() {
        $db = new Connection();
        $this->conn = $db->open();
    }

    public function update($data) {
        $sql = "UPDATE medicamentos SET Nombre = ?, dosis = ?, estado = ?, valor = ?, lote = ?, fecha_vencimiento = ?, fecha_elaboracion = ?, fecha_toma = ?, Idanimal = ? WHERE lote = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($data);
    }

    public function getById($id) {
        $sql = "SELECT * FROM medicamentos WHERE lote = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = htmlspecialchars($_POST['nombre']);
    $dosis = htmlspecialchars($_POST['dosis']);
    $estado = htmlspecialchars($_POST['estado']);
    $valor = htmlspecialchars($_POST['valor']);
    $lote = htmlspecialchars($_POST['lote']);
    $fecha_vencimiento = htmlspecialchars($_POST['fecha_vencimiento']);
    $fecha_elaboracion = htmlspecialchars($_POST['fecha_elaboracion']);
    $fecha_toma = htmlspecialchars($_POST['fecha_toma']);
    $Idanimal = htmlspecialchars($_POST['Idanimal']);

   
    $medicamento = new Medicamento();
    $data = array($nombre, $dosis, $estado, $valor, $lote, $fecha_vencimiento, $fecha_elaboracion, $fecha_toma, $Idanimal, $lote);
    $medicamento->update($data);

   
    $_SESSION['message'] = "Medicamento actualizado correctamente.";
    header("Location: listar.php");
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['lote'])) {
    
    $lote = $_GET['lote'];

   
    $medicamento = new Medicamento();
    $datosMedicamento = $medicamento->getById($lote);

   
    if (!$datosMedicamento) {
        $_SESSION['message'] = "medicamento no actualizado .";
        header("Location: listar.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Medicamento</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Medicamento</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $datosMedicamento['Nombre']; ?>">
            </div>
            <div class="form-group">
                <label for="dosis">Dosis:</label>
                <input type="text" class="form-control" id="dosis" name="dosis" value="<?php echo $datosMedicamento['dosis']; ?>">
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" class="form-control" id="estado" name="estado" value="<?php echo $datosMedicamento['estado']; ?>">
            </div>
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="text" class="form-control" id="valor" name="valor" value="<?php echo $datosMedicamento['valor']; ?>">
            </div>
            <div class="form-group">
                <label for="lote">Lote:</label>
                <input type="text" class="form-control" id="lote" name="lote" value="<?php echo $datosMedicamento['lote']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="fecha_vencimiento">Fecha de Vencimiento:</label>
                <input type="date" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento" value="<?php echo $datosMedicamento['fecha_vencimiento']; ?>">
            </div>
            <div class="form-group">
                <label for="fecha_elaboracion">Fecha de Elaboración:</label>
                <input type="date" class="form-control" id="fecha_elaboracion" name="fecha_elaboracion" value="<?php echo $datosMedicamento['fecha_elaboracion']; ?>">
            </div>
            <div class="form-group">
                <label for="fecha_toma">Fecha de Toma:</label>
                <input type="date" class="form-control" id="fecha_toma" name="fecha_toma" value="<?php echo $datosMedicamento['fecha_toma']; ?>">
            </div>
            <div class="form-group">
                <label for="Idanimal">ID Animal:</label>
                <input type="text" class="form-control" id="Idanimal" name="Idanimal" value="<?php echo $datosMedicamento['Idanimal']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</body>
</html>
