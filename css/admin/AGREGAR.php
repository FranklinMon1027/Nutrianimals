<?php
session_start();
include_once('../conexion/dbconect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $database = new Connection();
    $db = $database->open();

    
    $nombre = $_POST['nombre'];
    $dosis = $_POST['dosis'];
    $estado = $_POST['estado'];
    $valor = $_POST['valor'];
    $lote = $_POST['lote'];
    $fecha_vencimiento = $_POST['fecha_vencimiento'];
    $fecha_elaboracion = $_POST['fecha_elaboracion'];
    $fecha_toma = $_POST['fecha_toma'];
    $Idanimal = $_POST['Idanimal'];

    
    $sql = "INSERT INTO medicamentos (Nombre, Dosis, Estado, Valor, Lote, Fecha_vencimiento, Fecha_elaboracion, Fecha_toma, Idanimal) 
            VALUES (:nombre, :dosis, :estado, :valor, :lote, :fecha_vencimiento, :fecha_elaboracion, :fecha_toma, :Idanimal)";

    try {
        $stmt = $db->prepare($sql);
        $stmt->execute(array(
            ':nombre' => $nombre,
            ':dosis' => $dosis,
            ':estado' => $estado,
            ':valor' => $valor,
            ':lote' => $lote,
            ':fecha_vencimiento' => $fecha_vencimiento,
            ':fecha_elaboracion' => $fecha_elaboracion,
            ':fecha_toma' => $fecha_toma,
            ':Idanimal' => $Idanimal
        ));

        $_SESSION['message'] = 'Registro creado correctamente';
    } catch (PDOException $e) {
        $_SESSION['message'] = 'Error al crear el registro: ' . $e->getMessage();
    }

    header('location: listar.php'); 
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<li ><a href="index.html">INICIO <span class="sr-only">(current)</span></a></li>
<div class="container mt-4">
        <h2 class="mb-4">Crear medicamento</h2>
        <?php if(isset($_SESSION['message'])) { ?>
            <div class="alert alert-info"><?php echo $_SESSION['message']; ?></div>
        <?php } ?>
        <form method="POST">
   <div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type="text" class="form-control" id="nombre" name="nombre" required>
</div>
<div class="form-group">
    <label for="dosis">Dosis:</label>
    <input type="text" class="form-control" id="dosis" name="dosis" required>
</div>

<div class="form-group">
    <label for="estado">Estado:</label>
    <input type="text" class="form-control" id="estado" name="estado" required>
</div>
<div class="form-group">
    <label for="valor">Valor:</label>
    <input type="text" class="form-control" id="valor" name="valor" required>
</div>
<div class="form-group">
    <label for="lote">Lote:</label>
    <input type="text" class="form-control" id="lote" name="lote" required>
</div>
<div class="form-group">
    <label for="fecha_vencimiento">Fecha de Vencimiento:</label>
    <input type="date" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento" required>
</div>
<div class="form-group">
    <label for="fecha_elaboracion">Fecha de Elaboración:</label>
    <input type="date" class="form-control" id="fecha_elaboracion" name="fecha_elaboracion" required>
</div>
<div class="form-group">
    <label for="fecha_toma">Fecha de Toma:</label>
    <input type="date" class="form-control" id="fecha_toma" name="fecha_toma" required>
</div>
<div class="form-group">
    <label for="Idanimal">ID Animal:</label>
    <input type="text" class="form-control" id="Idanimal" name="Idanimal" required>
</div>
<button type="submit" class="btn btn-primary">Guardar Registro</button>

</body>
</html>