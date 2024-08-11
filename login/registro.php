<?php
session_start();
require_once 'dbconect.php';

$database = new Connection();
$conn = $database->open();

// Verifica si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Función para limpiar la entrada (puedes mantenerla si es necesaria)
    function limpiar_entrada($datos) {
        $datos = trim($datos);
        $datos = stripslashes($datos);
        $datos = htmlspecialchars($datos);
        return $datos;
    }

    // Recibe y limpia los datos del formulario
    $nombre = limpiar_entrada($_POST['nombre']);
    $apellido = limpiar_entrada($_POST['apellido']);
    $usuario = limpiar_entrada($_POST['usuario']);
    $contraseña = limpiar_entrada($_POST['contraseña']);
    $confirmarContraseña = limpiar_entrada($_POST['confirmar_contraseña']);
    $tipoDocumento = limpiar_entrada($_POST['tipo_documento']);
    $documentoIdentidad = limpiar_entrada($_POST['documento_identidad']);
    $correoElectronico = limpiar_entrada($_POST['correo_electronico']);
    $id_cargo = limpiar_entrada($_POST['id_cargo']);

    // Verifica que las contraseñas coincidan
    if ($contraseña !== $confirmarContraseña) {
        die("Las contraseñas no coinciden. Por favor, inténtalo de nuevo.");
    }

    // Hash de la contraseña
    $hashContraseña = password_hash($contraseña, PASSWORD_DEFAULT);

    // Verifica si ya existe un usuario con el mismo número de documento
    $sql_verificar_documento = "SELECT * FROM usuarios WHERE documento_identidad = ?";
    $stmt_verificar_documento = $conn->prepare($sql_verificar_documento);
    $stmt_verificar_documento->execute([$documentoIdentidad]);
    $result_verificar_documento = $stmt_verificar_documento->fetchAll();

    if (count($result_verificar_documento) > 0) {
        echo "<script>alert('Error: Ya existe un usuario con el número de documento proporcionado. Por favor, intente de nuevo.'); window.location.href = 'registro.php';</script>";
    } else {
        // Si no hay ningún usuario con el mismo número de documento, procede con la inserción
        try {
            // Sentencia SQL para insertar el usuario
            $sql_insertar_usuario = "INSERT INTO usuarios (nombre, apellido, usuario, contraseña, tipo_identidad, documento_identidad, correo_electronico, id_cargo) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt_insertar_usuario = $conn->prepare($sql_insertar_usuario);
            $stmt_insertar_usuario->execute([$nombre, $apellido, $usuario, $hashContraseña, $tipoDocumento, $documentoIdentidad, $correoElectronico, $id_cargo]);

            // Verifica si se insertó correctamente
            if ($stmt_insertar_usuario->rowCount() > 0) {
                $_SESSION['message'] = "Usuario registrado correctamente.";
                header("Location: registro_confirmado.php");
                exit;
            } else {
                $_SESSION['message'] = "Error al registrar usuario.";
            }
        } catch (PDOException $e) {
            $_SESSION['message'] = "Error al registrar usuario: " . $e->getMessage();
        } finally {
            // Cierra la conexión y la sentencia preparada
            $stmt_insertar_usuario = null;
            $conn = null;
        }
    }
} else {
    // Si el formulario no se ha enviado, redirige a la página de registro
    header("Location: registro.php");
    exit;
}
?>
