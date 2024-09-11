<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Alimentos</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
   
</head>
<body>
<nav class="navbar navbar-default">

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="http://localhost/pg%20admin%20y%20usu/indexxx.php">INICIO <span class="sr-only">(current)</span></a></li>
      </ul>
</nav>
<div class="container">
    <h1 class="page-header text-center"> Alimentos</h1>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <a href="agrealimentos.php" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Nuevo Alimento</a>
            <?php 
            session_start();
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
                    <th>ID</th>
                    <th>Tipo de Alimento</th>
                    <th>Lote</th>
                    <th>Marca</th>
                    <th>Fecha de Registro</th>
                    <th>Descripción del Producto</th>
                    <th>Cantidad</th>
                    <th>Estado</th>
                    <th>Fecha de Ingreso</th>
                    <th>Fecha de Salida</th>
                    <th>Acción</th>
                </thead>
                <tbody>
                    <?php
                      
                        include_once('../conexion/dbconect.php');

                        $database = new Connection();
                        $db = $database->open();
                        try{    
                            $sql = 'SELECT * FROM alimentos';
                            foreach ($db->query($sql) as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row['Idalimento']; ?></td>
                                    <td><?php echo $row['tipo_alimento']; ?></td>
                                    <td><?php echo $row['lote']; ?></td>
                                    <td><?php echo $row['marca']; ?></td>
                                    <td><?php echo $row['fecha_registro']; ?></td>
                                    <td><?php echo $row['descripcion_producto']; ?></td>
                                    <td><?php echo $row['cantidad']; ?></td>
                                    <td><?php echo $row['estado']; ?></td>
                                    <td><?php echo $row['fecha_ingreso']; ?></td>
                                    <td><?php echo $row['fecha_salida']; ?></td>
                                    <td>
                                        <a href="editalimento.php?id=<?php echo $row['Idalimento']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Editar</a>
                                        <a href="borraralimento.php?id=<?php echo $row['Idalimento']; ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Borrar</a>
                                    </td>
                                </tr>
                                <?php 
                            }
                        }
                        catch(PDOException $e){
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
