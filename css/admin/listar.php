<?php
session_start();
include_once('../conexion/dbconect.php');

$database = new Connection();
$db = $database->open();

$sql = "SELECT * FROM medicamentos";
$result = $db->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Medicamentos</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
      
         
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="http://localhost/pg%20admin%20y%20usu/indexxx.php">INICIO <span class="sr-only">(current)</span></a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <h1 class="page-header text-center">Medicamentos</h1>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <a href="AGREGAR.php" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Nuevo Medicamento</a>
            <?php 
            if (isset($_SESSION['message'])) {
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
                    <tr>
                        <th>Lote</th>
                        <th>Nombre</th>
                        <th>Dosis</th>
                        <th>Estado</th>
                        <th>Valor</th>
                        <th>Fecha de Vencimiento</th>
                        <th>Fecha de Elaboración</th>
                        <th>Fecha de Toma</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    try {
                        while ($row = $result->fetch()) {
                            ?>
                            <tr>
                                <td><?php echo $row['lote']; ?></td>
                                <td><?php echo $row['Nombre']; ?></td>
                                <td><?php echo $row['dosis']; ?></td>
                                <td><?php echo $row['estado']; ?></td>
                                <td><?php echo $row['valor']; ?></td>
                                <td><?php echo $row['fecha_vencimiento']; ?></td>
                                <td><?php echo $row['fecha_elaboracion']; ?></td>
                                <td><?php echo $row['fecha_toma']; ?></td>
                                <td>
                                    <a href="editar.php?lote=<?php echo $row['lote']; ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span> Editar</a>
                                    <a href="eliminar.php?lote=<?php echo $row['lote']; ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Borrar</a>
                                </td>
                            </tr>
                            <?php
                        }
                    } catch (PDOException $e) {
                        echo "Hubo un problema en la conexión: " . $e->getMessage();
                    }

                    $database->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
