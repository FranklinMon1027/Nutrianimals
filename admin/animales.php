<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Animales</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
   
</head>
<body>
<nav class="navbar navbar-default">

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="../indexxx.php">INICIO <span class="sr-only">(current)</span></a></li>
      </ul>
</nav>
<div class="container">
    <h1 class="page-header text-center">Animales</h1>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <a href="agreanimal.php" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Nuevo Animal</a>
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
                    <th>Tipo de Animal</th>
                    <th>Peso</th>
                    <th>Raza</th>
                    <th>Edad</th>
                    <th>Dosis de Alimento</th>
                    <th>Fecha de Entrada</th>
                    <th>Fecha de Salida</th>
                    <th>idusuario</th>

                    <th>Acción</th>
                </thead>
                <tbody>
                    <?php
                      
                        include_once('../conexion/dbconect.php');

                        $database = new Connection();
                        $db = $database->open();
                        try{    
                            $sql = 'SELECT * FROM animales';
                            foreach ($db->query($sql) as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row['Idanimal']; ?></td>
                                    <td><?php echo $row['tipo_animal']; ?></td>
                                    <td><?php echo $row['peso']; ?></td>
                                    <td><?php echo $row['raza']; ?></td>
                                    <td><?php echo $row['edad']; ?></td>
                                    <td><?php echo $row['dosis_alimento']; ?></td>
                                    <td><?php echo $row['fecha_entrada']; ?></td>
                                    <td><?php echo $row['fecha_salida']; ?></td>
                                    <td><?php echo $row['idusuarios']; ?></td>
                                    <td>
                                        <a href="editanimal.php?id=<?php echo $row['Idanimal'] ?>iduaurios=<?php echo $row['idusuarios']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Editar</a>
                                        <a href="borraranimal.php?id=<?php echo $row['Idanimal']; ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Borrar</a>
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
