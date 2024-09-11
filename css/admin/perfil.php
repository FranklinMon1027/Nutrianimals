<?php
// Inicia la sesión
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

    public function updateDatos($id, $nombre, $usuario, $correo_electronico, $documento_identidad, $tipo_identidad, $apellido) {
        $sql = "UPDATE usuarios SET nombre=?, usuario=?, correo_electronico=?, documento_identidad=?, tipo_identidad=?, apellido=? WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$nombre, $usuario, $correo_electronico, $documento_identidad, $tipo_identidad, $apellido, $id]);
    }

    public function updatePassword($id, $contraseña) {
        $sql = "UPDATE usuarios SET contraseña=? WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$contraseña, $id]);
    }

    public function updateImage($id, $imagePath) {
        $sql = "UPDATE usuarios SET imagen=? WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$imagePath, $id]);
    }
}

// Verifica si el usuario está autenticado
if (!isset($_SESSION['id'])) {
    header("Location: index.php"); // Redirige al login si no está autenticado
    exit;
}

// Obtén el ID del usuario de la sesión
$id_usuario = $_SESSION['id'];

// Procesar la solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['updateDatos'])) {
        // Procesar actualización de datos
        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $correo_electronico = $_POST['correo_electronico'];
        $documento_identidad = $_POST['documento_identidad'];
        $tipo_identidad = $_POST['tipo_identidad'];
        $apellido = $_POST['apellido'];

        $usuarioObj = new Usuario();
        if ($usuarioObj->updateDatos($id_usuario, $nombre, $usuario, $correo_electronico, $documento_identidad, $tipo_identidad, $apellido)) {
            $_SESSION['message'] = "Datos actualizados correctamente.";
        } else {
            $_SESSION['message'] = "Error al actualizar los datos.";
        }
    } elseif (isset($_POST['updatePassword'])) {
        // Procesar actualización de contraseña
        $contraseña_antigua = $_POST['contraseña_antigua'];
        $contraseña_nueva = $_POST['contraseña_nueva'];
        $confirmar_contraseña = $_POST['confirmar_contraseña'];

        $usuarioObj = new Usuario();
        $datosUsuario = $usuarioObj->getById($id_usuario);

        if ($contraseña_antigua === $datosUsuario['contraseña']) {  // Comparación de contraseña en texto plano (no seguro)
            if ($contraseña_nueva === $confirmar_contraseña) {
                if ($usuarioObj->updatePassword($id_usuario, $contraseña_nueva)) {
                    $_SESSION['message'] = "Contraseña actualizada correctamente.";
                } else {
                    $_SESSION['message'] = "Error al actualizar la contraseña.";
                }
            } else {
                $_SESSION['message'] = "Las nuevas contraseñas no coinciden.";
            }
        } else {
            $_SESSION['message'] = "La contraseña actual es incorrecta.";
        }
    } elseif (isset($_POST['updateImage'])) {
        // Procesar actualización de imagen
        if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == UPLOAD_ERR_OK) {
            $tmpName = $_FILES['imagen']['tmp_name'];
            $fileName = basename($_FILES['imagen']['name']);
            $uploadDir = 'uploads/';
            $filePath = $uploadDir . $fileName;

            if (move_uploaded_file($tmpName, $filePath)) {
                $usuarioObj = new Usuario();
                if ($usuarioObj->updateImage($id_usuario, $filePath)) {
                    $_SESSION['message'] = "Imagen actualizada correctamente.";
                } else {
                    $_SESSION['message'] = "Error al actualizar la imagen.";
                }
            } else {
                $_SESSION['message'] = "Error al subir la imagen.";
            }
        } else {
            $_SESSION['message'] = "No se seleccionó ninguna imagen.";
        }
    }

    header("Location: indexx.php");
    exit();
}

// Procesar la solicitud GET para obtener los datos del usuario
$usuario = new Usuario();
$datosUsuario = $usuario->getById($id_usuario);

if (!$datosUsuario) {
    $_SESSION['message'] = "Usuario no encontrado.";
    header("Location: indexx.php");
    exit();
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
        <?php if(isset($_SESSION['message'])): ?>
            <div class="alert alert-info">
                <?php echo $_SESSION['message']; unset($_SESSION['message']); ?>
            </div>
        <?php endif; ?>

        <!-- Formulario de actualización de datos -->
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
            <button type="submit" name="updateDatos" class="btn btn-primary">Actualizar Datos</button>
        </form>

        <!-- Formulario de actualización de contraseña -->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($datosUsuario['id']); ?>">
            <div class="form-group">
                <label for="contraseña_antigua">Contraseña Actual:</label>
                <input type="password" class="form-control" id="contraseña_antigua" name="contraseña_antigua" required>
            </div>
            <div class="form-group">
                <label for="contraseña_nueva">Nueva Contraseña:</label>
                <input type="password" class="form-control" id="contraseña_nueva" name="contraseña_nueva" required>
            </div>
            <div class="form-group">
                <label for="confirmar_contraseña">Confirmar Nueva Contraseña:</label>
                <input type="password" class="form-control" id="confirmar_contraseña" name="confirmar_contraseña" required>
            </div>
            <button type="submit" name="updatePassword" class="btn btn-primary">Actualizar Contraseña</button>
        </form>

        <!-- Formulario de actualización de imagen -->
        <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($datosUsuario['id']); ?>">
            <div class="form-group">
                <label for="imagen">Imagen:</label>
                <input type="file" class="form-control" id="imagen" name="imagen">
            </div>
            <button type="submit" name="updateImage" class="btn btn-primary">Actualizar Imagen</button>
        </form>
    </div>
</body>
</html>
