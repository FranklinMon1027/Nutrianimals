<?php
session_start();
require_once '../conexion/dbconect.php';

$database = new Connection();
$db = $database->open();

try {
    $sql = 'SELECT * FROM vacunas';
    $stmt = $db->query($sql);
} catch (PDOException $e) {
    echo "Hubo un problema en la conexión: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Vacunas</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
<nav class="navbar navbar-default">
  
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="http://localhost/pg%20admin%20y%20usu/indexxx.php">INICIO <span class="sr-only">(current)</span></a></li>
        </ul>
    </div>
</nav>
<div class="container">
    <h1 class="page-header text-center">Vacunas</h1>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <a href="agrevacunas.php" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Nueva Vacuna</a>
            <?php 
            if(isset($_SESSION['message'])){
                ?>
                <div class="alert alert-info text-center" style="margin-top:20px;">
                    <?php echo $_SESSION['message']; ?>
                </div>
                <?php
                unset($_SESSION['message']);
            }
            ?>
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>Idvacuna</th>
                    <th>Edad del Animal</th>
                    <th>Nombre de la Vacuna</th>
                    <th>Descripción</th>
                    <th>Unidades</th>
                    <th>Fecha de Aplicación</th>
                    <th>Acción</th>
                </thead>
                <tbody>
                    <?php while ($row = $stmt->fetch()) : ?>
                        <tr>
                            <td><?php echo $row['Idvacuna']; ?></td>
                            <td><?php echo $row['edad_animal']; ?></td>
                            <td><?php echo $row['nombre_vacuna']; ?></td>
                            <td><?php echo $row['descripcion']; ?></td>
                            <td><?php echo $row['unidades']; ?></td>
                            <td><?php echo $row['fecha_aplicacion']; ?></td>
                            <td>
                                <a href="editarvacu.php?Idvacuna=<?php echo $row['Idvacuna']; ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span> Editar</a>
                                <a href="borrarvacu.php?Idvacuna=<?php echo $row['Idvacuna']; ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Borrar</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
