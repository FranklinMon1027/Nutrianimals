<?php
session_start();
include_once('../conexion/dbconect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $database = new Connection();
    $db = $database->open();

  
    $Idalimento = $_POST['Idalimento'];
    $tipo_alimento = $_POST['tipo_alimento'];
    $lote = $_POST['lote'];
    $marca = $_POST['marca'];
    $fecha_registro = $_POST['fecha_registro'];
    $descripcion_producto = $_POST['descripcion_producto'];
    $cantidad = $_POST['cantidad'];
    $estado = $_POST['estado'];
    $fecha_ingreso = $_POST['fecha_ingreso'];
    $fecha_salida = $_POST['fecha_salida'];

    
    $sql = "INSERT INTO alimentos (Idalimento, tipo_alimento, lote, marca, fecha_registro, descripcion_producto, cantidad, estado, fecha_ingreso, fecha_salida) VALUES (:Idalimento, :tipo_alimento, :lote, :marca, :fecha_registro, :descripcion_producto, :cantidad, :estado, :fecha_ingreso, :fecha_salida)";

    try {
        $stmt = $db->prepare($sql);
       
        $stmt->execute(array(
            ':Idalimento' => $Idalimento,
            ':tipo_alimento' => $tipo_alimento,
            ':lote' => $lote,
            ':marca' => $marca,
            ':fecha_registro' => $fecha_registro,
            ':descripcion_producto' => $descripcion_producto,
            ':cantidad' => $cantidad,
            ':estado' => $estado,
            ':fecha_ingreso' => $fecha_ingreso,
            ':fecha_salida' => $fecha_salida
        ));

        $_SESSION['message'] = 'Registro creado correctamente';
    } catch (PDOException $e) {
        $_SESSION['message'] = 'Error al crear el registro: ' . $e->getMessage();
    }

  
    header('location: alimentos.php'); 
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2 class="mb-4">Crear Registro</h2>
    <?php if(isset($_SESSION['message'])) { ?>
        <div class="alert alert-info"><?php echo $_SESSION['message']; ?></div>
    <?php unset($_SESSION['message']); } ?>
    <form method="POST">
        <div class="form-group">
            <label for="Idalimento">ID Alimento:</label>
            <input type="text" class="form-control" id="Idalimento" name="Idalimento" required>
        </div>
        <div class="form-group">
            <label for="tipo_alimento">Tipo de Alimento:</label>
            <input type="text" class="form-control" id="tipo_alimento" name="tipo_alimento" required>
        </div>
        <div class="form-group">
            <label for="lote">Lote:</label>
            <input type="text" class="form-control" id="lote" name="lote" required>
        </div>
        <div class="form-group">
            <label for="marca">Marca:</label>
            <input type="text" class="form-control" id="marca" name="marca" required>
        </div>
        <div class="form-group">
            <label for="fecha_registro">Fecha de Registro:</label>
            <input type="date" class="form-control" id="fecha_registro" name="fecha_registro" required>
        </div>
        <div class="form-group">
            <label for="descripcion_producto">Descripción del Producto:</label>
            <input type="text" class="form-control" id="descripcion_producto" name="descripcion_producto" required>
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="text" class="form-control" id="cantidad" name="cantidad" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <input type="text" class="form-control" id="estado" name="estado" required>
        </div>
        <div class="form-group">
            <label for="fecha_ingreso">Fecha de Ingreso:</label>
            <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" required>
        </div>
        <div class="form-group">
            <label for="fecha_salida">Fecha de Salida:</label>
            <input type="date" class="form-control" id="fecha_salida" name="fecha_salida" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Registro</button>
    </form>
</div>
</body>
</html>
