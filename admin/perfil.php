<?php
session_start();
require_once 'dbconect.php';

class Usuario {
    private $conn;

    public function __construct() {
        $db = new Connection();
        $this->conn = $db->open();
    }

    public function getById($id) {
        $sql = "SELECT * FROM usuarios WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $nombre, $apellido, $correo_electronico, $documento_identidad, $tipo_identidad, $nueva_contraseña = null) {
        $sql = "UPDATE usuarios SET nombre = ?, apellido = ?, correo_electronico = ?, documento_identidad = ?, tipo_identidad = ?";
        $params = [$nombre, $apellido, $correo_electronico, $documento_identidad, $tipo_identidad];

        if ($nueva_contraseña) {
            $sql .= ", contraseña = ?";
            $params[] = password_hash($nueva_contraseña, PASSWORD_DEFAULT);
        }

        $sql .= " WHERE id = ?";
        $params[] = $id;

        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($params);
    }

    public function verificarContraseña($id, $contraseña_actual) {
        $sql = "SELECT contraseña FROM usuarios WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        return password_verify($contraseña_actual, $usuario['contraseña']);
    }
}

// Si se ha enviado un formulario para actualizar
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id']; // La ID del usuario que viene del formulario

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo_electronico = $_POST['correo_electronico'];
    $documento_identidad = $_POST['documento_identidad'];
    $tipo_identidad = $_POST['tipo_identidad'];
    $contraseña_actual = $_POST['contraseña_actual'];
    $nueva_contraseña = $_POST['nueva_contraseña'];
    $confirmar_contraseña = $_POST['confirmar_contraseña'];

    $usuarioObj = new Usuario();

    if ($nueva_contraseña || $confirmar_contraseña) {
        // Verificar la contraseña actual
        if ($usuarioObj->verificarContraseña($id, $contraseña_actual)) {
            // Actualizar los datos del usuario
            if ($nueva_contraseña === $confirmar_contraseña) {
                $usuarioObj->update($id, $nombre, $apellido, $correo_electronico, $documento_identidad, $tipo_identidad, $nueva_contraseña);
                $_SESSION['message'] = "Usuario actualizado correctamente.";
            } else {
                $_SESSION['error'] = "Las nuevas contraseñas no coinciden.";
            }
        } else {
            $_SESSION['error'] = "La contraseña actual es incorrecta.";
        }
    } else {
        // Si no se están actualizando contraseñas
        $usuarioObj->update($id, $nombre, $apellido, $correo_electronico, $documento_identidad, $tipo_identidad);
        $_SESSION['message'] = "Usuario actualizado correctamente.";
    }

    // Redirigir al perfil del usuario después de la actualización
    header("Location: perfil.php?id=" . $id);
    exit();
}

// Si no se ha enviado un formulario, mostrar el formulario de edición
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id']; // Obtener la ID del usuario de la URL

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
        <?php
        if (isset($_SESSION['message'])) {
            echo '<div class="alert alert-success">' . $_SESSION['message'] . '</div>';
            unset($_SESSION['message']);
        }
        if (isset($_SESSION['error'])) {
            echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
            unset($_SESSION['error']);
        }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($datosUsuario['id']); ?>">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo htmlspecialchars($datosUsuario['nombre']); ?>" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo htmlspecialchars($datosUsuario['apellido']); ?>" required>
            </div>
            <div class="form-group">
                <label for="correo_electronico">Correo Electrónico:</label>
                <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" value="<?php echo htmlspecialchars($datosUsuario['correo_electronico']); ?>" required>
            </div>
            <div class="form-group">
                <label for="documento_identidad">Documento Identidad:</label>
                <input type="text" class="form-control" id="documento_identidad" name="documento_identidad" value="<?php echo htmlspecialchars($datosUsuario['documento_identidad']); ?>" required>
            </div>
            <div class="form-group">
                <label for="tipo_identidad">Tipo Identidad:</label>
                <input type="text" class="form-control" id="tipo_identidad" name="tipo_identidad" value="<?php echo htmlspecialchars($datosUsuario['tipo_identidad']); ?>" required>
            </div>
            <div class="form-group">
                <label for="contraseña_actual">Contraseña Actual:</label>
                <input type="password" class="form-control" id="contraseña_actual" name="contraseña_actual">
            </div>
            <div class="form-group">
                <label for="nueva_contraseña">Nueva Contraseña:</label>
                <input type="password" class="form-control" id="nueva_contraseña" name="nueva_contraseña">
            </div>
            <div class="form-group">
                <label for="confirmar_contraseña">Confirmar Nueva Contraseña:</label>
                <input type="password" class="form-control" id="confirmar_contraseña" name="confirmar_contraseña">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</body>
</html>
