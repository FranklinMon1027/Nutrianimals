<?php
session_start();
require_once '../conexion/dbconect.php';

class Usuario {
    private $conn;

    public function __construct() {
        $db = new Connection();
        $this->conn = $db->open();
    }

    public function getById($id) {
        $sql = "SELECT * FROM usuarios WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $nombre, $usuario, $contraseña, $id_cargo, $correo_electronico, $documento_identidad, $tipo_identidad, $apellido) {
        $sql = "UPDATE usuarios SET nombre=?, usuario=?, contraseña=?, id_cargo=?, correo_electronico=?, documento_identidad=?, tipo_identidad=?, apellido=? WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$nombre, $usuario, $contraseña, $id_cargo, $correo_electronico, $documento_identidad, $tipo_identidad, $apellido, $id]);
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $id_cargo = $_POST['id_cargo'];
    $correo_electronico = $_POST['correo_electronico'];
    $documento_identidad = $_POST['documento_identidad'];
    $tipo_identidad = $_POST['tipo_identidad'];
    $apellido = $_POST['apellido'];


    $usuarioObj = new Usuario();
    $usuarioObj->update($id, $nombre, $usuario, $contraseña, $id_cargo, $correo_electronico, $documento_identidad, $tipo_identidad, $apellido);

  
    $_SESSION['message'] = "Usuario actualizado correctamente.";
    header("Location: indexx.php");
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
   
    $id = $_GET['id'];

    $usuario = new Usuario();
    $datosUsuario = $usuario->getById($id);

    
    if (!$datosUsuario) {
        $_SESSION['message'] = "Usuario no encontrado.";
        header("Location: indexx.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Usuario</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($datosUsuario['id']); ?>">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo htmlspecialchars($datosUsuario['nombre']); ?>" required>
            </div>
            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo htmlspecialchars($datosUsuario['usuario']); ?>" required>
            </div>
            <div class="form-group">
                <label for="contraseña">Contraseña:</label>
                <input type="password" class="form-control" id="contraseña" name="contraseña" value="<?php echo htmlspecialchars($datosUsuario['contraseña']); ?>" required>
            </div>
            <div class="form-group">
                <label for="id_cargo">ID Cargo:</label>
                <input type="number" class="form-control" id="id_cargo" name="id_cargo" value="<?php echo htmlspecialchars($datosUsuario['id_cargo']); ?>" required>
            </div>
            <div class="form-group">
                <label for="correo_electronico">Correo Electrónico:</label>
                <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" value="<?php echo htmlspecialchars($datosUsuario['correo_electronico']); ?>">
            </div>
            <div class="form-group">
                <label for="documento_identidad">Documento Identidad:</label>
                <input type="text" class="form-control" id="documento_identidad" name="documento_identidad" value="<?php echo htmlspecialchars($datosUsuario['documento_identidad']); ?>">
            </div>
            <div class="form-group">
                <label for="tipo_identidad">Tipo Identidad:</label>
                <input type="text" class="form-control" id="tipo_identidad" name="tipo_identidad" value="<?php echo htmlspecialchars($datosUsuario['tipo_identidad']); ?>">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo htmlspecialchars($datosUsuario['apellido']); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</body>
</html>
