<?php
session_start();
require_once '../conexion/dbconect.php';

class Alimento {
    private $conn;

    public function __construct() {
        $db = new Connection();
        $this->conn = $db->open();
    }

    public function update($data) {
        $sql = "UPDATE alimentos SET tipo_alimento = ?, lote = ?, marca = ?, fecha_registro = ?, descripcion_producto = ?, cantidad = ?, estado = ?, fecha_ingreso = ?, fecha_salida = ? WHERE Idalimento = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($data);
    }

    public function getById($id) {
        $sql = "SELECT * FROM alimentos WHERE Idalimento = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    extract($_POST);

    $alimento = new Alimento();
    $data = [$tipo_alimento, $lote, $marca, $fecha_registro, $descripcion_producto, $cantidad, $estado, $fecha_ingreso, $fecha_salida, $Idalimento];
    
    if ($alimento->update($data)) {
        $_SESSION['message'] = 'Registro actualizado correctamente';
    } else {
        $_SESSION['message'] = 'Error al actualizar el registro';
    }

    header("Location: listar.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['Idalimento'])) {
    $Idalimento = $_GET['Idalimento'];

    $alimento = new Alimento();
    $datosAlimento = $alimento->getById($Idalimento);

    if (!$datosAlimento) {
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
    <title>Editar Información del Alimento</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Información del Alimento</h1>
        <form method="post" action="">
            <div class="form-group">
                <label for="tipo_alimento">Tipo de Alimento:</label>
                <input type="text" class="form-control" id="tipo_alimento" name="tipo_alimento" value="<?php echo isset($datosAlimento) ? $datosAlimento['tipo_alimento'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="lote">Lote:</label>
                <input type="text" class="form-control" id="lote" name="lote" value="<?php echo isset($datosAlimento) ? $datosAlimento['lote'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="marca">Marca:</label>
                <input type="text" class="form-control" id="marca" name="marca" value="<?php echo isset($datosAlimento) ? $datosAlimento['marca'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="fecha_registro">Fecha de Registro:</label>
                <input type="date" class="form-control" id="fecha_registro" name="fecha_registro" value="<?php echo isset($datosAlimento) ? $datosAlimento['fecha_registro'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="descripcion_producto">Descripción del Producto:</label>
                <textarea class="form-control" id="descripcion_producto" name="descripcion_producto" required><?php echo isset($datosAlimento) ? $datosAlimento['descripcion_producto'] : ''; ?></textarea>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" value="<?php echo isset($datosAlimento) ? $datosAlimento['cantidad'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <select class="form-control" id="estado" name="estado" required>
                    <option value="">Seleccione un estado</option>
                    <option value="Disponible" <?php echo isset($datosAlimento) && $datosAlimento['estado'] == 'Disponible' ? 'selected' : ''; ?>>Disponible</option>
                    <option value="Agotado" <?php echo isset($datosAlimento) && $datosAlimento['estado'] == 'Agotado' ? 'selected' : ''; ?>>Agotado</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fecha_ingreso">Fecha de Ingreso:</label>
                <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="<?php echo isset($datosAlimento) ? $datosAlimento['fecha_ingreso'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="fecha_salida">Fecha de Salida:</label>
                <input type="date" class="form-control" id="fecha_salida" name="fecha_salida" value="<?php echo isset($datosAlimento) ? $datosAlimento['fecha_salida'] : ''; ?>">
            </div>
            <input type="hidden" id="Idalimento" name="Idalimento" value="<?php echo isset($datosAlimento) ? $datosAlimento['Idalimento'] : ''; ?>">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</body>
</html>
