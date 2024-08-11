<?php
session_start();
include_once('../conexion/dbconect.php');

$database = new Connection();
$db = $database->open();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>usuarios</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css">
	<link href="/css/styles.css" rel="stylesheet">
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> 
        <span class="sr-only">Toggle navigation</span> 
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="./">BaulPHP</a> 
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="http://localhost/pg%20admin%20y%20usu/indexxx.php">INICIO <span class="sr-only">(current)</span></a></li>
      </ul>
    </div>
   
  </div>

</nav>

<div class="container">
	<h1 class="page-header text-center">Usuarios</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<a href="agreusuario.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Nuevo Registro</a>
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
					<th>ID</th>
					<th>Nombre</th>
					<th>Usuario</th>
					<th>Correo Electrónico</th>
					<th>Documento Identidad</th>
					<th>Tipo Identidad</th>
					<th>Apellido</th>
					<th>ID Cargo</th>
					<th>Acción</th>
				</thead>
				<tbody>
					<?php
						try {
							$sql = 'SELECT id, nombre, usuario, correo_electronico, documento_identidad, tipo_identidad, apellido, id_cargo FROM usuarios';
							foreach ($db->query($sql) as $row) {
					?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['nombre']; ?></td>
						<td><?php echo $row['usuario']; ?></td>
						<td><?php echo $row['correo_electronico']; ?></td>
						<td><?php echo $row['documento_identidad']; ?></td>
						<td><?php echo $row['tipo_identidad']; ?></td>
						<td><?php echo $row['apellido']; ?></td>
						<td><?php echo $row['id_cargo']; ?></td>
						<td>
							<a href="editar_usuario.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">
								<span class="glyphicon glyphicon-edit"></span> Editar
							</a>
							<a href="eliminar_usuario.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">
								<span class="glyphicon glyphicon-trash"></span> Borrar
							</a> 
						</td>
					</tr>
					<?php 
							}
						} catch(PDOException $e) {
							echo "Hubo un problema en la conexión: " . $e->getMessage();
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
</body>
</html>

<?php $database->close(); ?>
