<?php
session_start();
include_once('../conexion/dbconect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $database = new Connection();
    $db = $database->open();

    
    $Idanimal = $_POST['Idanimal'];
    $tipo_animal = $_POST['tipo_animal'];
    $peso = $_POST['peso'];
    $raza = $_POST['raza'];
    $edad = $_POST['edad'];
    $dosis_alimento = $_POST['dosis_alimento'];
    $fecha_entrada = $_POST['fecha_entrada'];
    $fecha_salida = $_POST['fecha_salida'];

   
    $sql = "INSERT INTO animales (Idanimal, tipo_animal, peso, raza, edad, dosis_alimento, fecha_entrada, fecha_salida) VALUES (:Idanimal, :tipo_animal, :peso, :raza, :edad, :dosis_alimento, :fecha_entrada, :fecha_salida)";

    try {
        $stmt = $db->prepare($sql);
      
        $stmt->execute(array(
            ':Idanimal' => $Idanimal,
            ':tipo_animal' => $tipo_animal,
            ':peso' => $peso,
            ':raza' => $raza,
            ':edad' => $edad,
            ':dosis_alimento' => $dosis_alimento,
            ':fecha_entrada' => $fecha_entrada,
            ':fecha_salida' => $fecha_salida
        ));

        $_SESSION['message'] = 'Registro creado correctamente';
    } catch (PDOException $e) {
        $_SESSION['message'] = 'Error al crear el registro: ' . $e->getMessage();
    }

    header('location: animales.php'); 
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
            <label for="Idanimal">ID Animal:</label>
            <input type="text" class="form-control" id="Idanimal" name="Idanimal" required>
        </div>
        <div class="form-group">
            <label for="tipo_animal">Tipo de Animal:</label>
            <input type="text" class="form-control" id="tipo_animal" name="tipo_animal" required>
        </div>
        <div class="form-group">
            <label for="peso">Peso:</label>
            <input type="text" class="form-control" id="peso" name="peso" required>
        </div>
        <div class="form-group">
            <label for="raza">Raza:</label>
            <input type="text" class="form-control" id="raza" name="raza" required>
        </div>
        <div class="form-group">
            <label for="edad">Edad:</label>
            <input type="text" class="form-control" id="edad" name="edad" required>
        </div>
        <div class="form-group">
            <label for="dosis_alimento">Dosis de Alimento:</label>
            <input type="text" class="form-control" id="dosis_alimento" name="dosis_alimento" required>
        </div>
        <div class="form-group">
            <label for="fecha_entrada">Fecha de Entrada:</label>
            <input type="date" class="form-control" id="fecha_entrada" name="fecha_entrada" required>
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
