<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Categorías</title>
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
    <h1 class="page-header text-center">Categorías</h1>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <a href="agrecategorias.php" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Nueva Categoría</a>
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
                    <th>Nombre de Categoría</th>
                    <th>ID Usuario</th>
                    <th>Acción</th>
                </thead>
                <tbody>
                    <?php
                        include_once('../conexion/dbconect.php');

                        $database = new Connection();
                        $db = $database->open();
                        try{    
                            $sql = 'SELECT * FROM categorias';
                            foreach ($db->query($sql) as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row['Idcategoria']; ?></td>
                                    <td><?php echo $row['nombre_categoria']; ?></td>
                                    <td><?php echo isset($row['idusuarios']) ? $row['idusuarios'] : 'N/A'; ?></td>
                                    <td>
                                        <a href="edicategoria.php?Idcategoria=<?php echo $row['Idcategoria'] ?>&idusuarios=<?php echo isset($row['idusuarios']) ? $row['idusuarios'] : ''; ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span> Editar</a>
                                        <a href="borrarcate.php?Idcategoria=<?php echo $row['Idcategoria'] ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Borrar</a>
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
<!-- Scripts -->
</body>
</html>
