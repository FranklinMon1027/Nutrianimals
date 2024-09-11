<?php
session_start();
require_once '../conexion/dbconect.php';

class Usuario {
    private $conn;

    public function __construct() {
        $db = new Connection();
        $this->conn = $db->open();
    }

    public function create($nombre, $usuario, $contraseña, $correo_electronico, $documento_identidad, $tipo_identidad, $apellido, $id_cargo) {
        $sql = "INSERT INTO usuarios (nombre, usuario, contraseña, correo_electronico, documento_identidad, tipo_identidad, apellido, id_cargo) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$nombre, $usuario, $contraseña, $correo_electronico, $documento_identidad, $tipo_identidad, $apellido, $id_cargo]);
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $correo_electronico = isset($_POST['correo_electronico']) ? $_POST['correo_electronico'] : null;
    $documento_identidad = isset($_POST['documento_identidad']) ? $_POST['documento_identidad'] : null;
    $tipo_identidad = isset($_POST['tipo_identidad']) ? $_POST['tipo_identidad'] : null;
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : null;
    $id_cargo = $_POST['id_cargo'];

    $usuarioObj = new Usuario();
    if ($usuarioObj->create($nombre, $usuario, $contraseña, $correo_electronico, $documento_identidad, $tipo_identidad, $apellido, $id_cargo)) {
        $_SESSION['message'] = 'Usuario agregado correctamente.';
    } else {
        $_SESSION['message'] = 'Error al agregar el usuario.';
    }

    
    header("Location: indexx.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Agregar Usuario</h1>
        <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-info"><?php echo $_SESSION['message']; ?></div>
            <?php unset($_SESSION['message']); ?>
        <?php } ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario:</label>
                <input type="text" class="form-control" id="usuario" name="usuario" required>
            </div>
            <div class="mb-3">
                <label for="contraseña" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" id="contraseña" name="contraseña" required>
            </div>
            <div class="mb-3">
                <label for="correo_electronico" class="form-label">Correo Electrónico:</label>
                <input type="email" class="form-control" id="correo_electronico" name="correo_electronico">
            </div>
            <div class="mb-3">
                <label for="documento_identidad" class="form-label">Documento de Identidad:</label>
                <input type="text" class="form-control" id="documento_identidad" name="documento_identidad">
            </div>
            <div class="mb-3">
                <label for="tipo_identidad" class="form-label">Tipo de Identidad:</label>
                <input type="text" class="form-control" id="tipo_identidad" name="tipo_identidad">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido:</label>
                <input type="text" class="form-control" id="apellido" name="apellido">
            </div>
            <div class="mb-3">
                <label for="id_cargo" class="form-label">ID Cargo:</label>
                <select class="form-control" id="id_cargo" name="id_cargo" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
</body>
</html>
