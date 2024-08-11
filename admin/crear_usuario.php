<?php
session_start();

include_once('dbconect.php'); // Incluye el archivo que define la clase Connection

// Crear una instancia de la clase Connection para abrir la conexión
$database = new Connection();
$conn = $database->open(); // Obtener la conexión PDO

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombreUsuario = $_POST['nombreUsuario'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
    $rol = $_POST['rol'];
    $TipoDocumentoID = $_POST['tipo_documento'];
    $DocumentoIdentidad = $_POST['DocumentoIdentidad'];
    $CorreoElectronico = $_POST['CorreoElectronico'];

    try {
        // Preparar la sentencia SQL
        $stmt = $conn->prepare("INSERT INTO Usuarios (NombreUsuario, Contraseña, Rol, TipoDocumento_ID, DocumentoIdentidad, CorreoElectronico) 
                                VALUES (?, ?, ?, ?, ?, ?)");
        
        // Vincular parámetros
        $stmt->bindParam(1, $nombreUsuario);
        $stmt->bindParam(2, $contrasena);
        $stmt->bindParam(3, $rol);
        $stmt->bindParam(4, $TipoDocumentoID);
        $stmt->bindParam(5, $DocumentoIdentidad);
        $stmt->bindParam(6, $CorreoElectronico);

        // Ejecutar la sentencia SQL
        if ($stmt->execute()) {
            // Redireccionar a la página de administrador si la inserción fue exitosa
            $_SESSION['message'] = 'Usuario creado correctamente';
            header("Location: admin.php");
            exit;
        } else {
            // Mostrar mensaje de error si falla la ejecución de la sentencia SQL
            $_SESSION['message'] = 'Error al crear usuario';
        }
    } catch (PDOException $e) {
        // Capturar cualquier excepción de PDO
        $_SESSION['message'] = 'Error de base de datos: ' . $e->getMessage();
    }

    // Cerrar la sentencia
    $stmt = null;
}

// Cerrar la conexión al finalizar
$database->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Usuario</title>
    <link rel="stylesheet" href="usuarios.css">
</head>
<body>
    <div class="container">
        <h3>Crear Nuevo Usuario</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo '<div class="alert alert-info">' . $_SESSION['message'] . '</div>';
            unset($_SESSION['message']);
        }
        ?>
        <form action="crear_usuario.php" method="post">
            <label for="nombreUsuario">Nombre de Usuario:</label>
            <input type="text" id="nombreUsuario" name="nombreUsuario" required>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>

            <label for="rol">Rol:</label>
            <select id="rol" name="rol" required>
                <option value="empleado">Empleado</option>
                <option value="administrador">Administrador</option>
                <option value="recursos_humanos">Recursos Humanos</option>
            </select>

            <label for="tipo">Tipo Documento:</label>
            <select id="tipo_documento" name="tipo_documento" required>
                <option value="1">NIT</option>
                <option value="2">Cedula de Ciudadania</option>
                <option value="3">Cedula Extrajenria</option>
            </select>

            <label for="Numero">Numero Documento:</label>
            <input type="number" id="DocumentoIdentidad" name="DocumentoIdentidad" required>

            <label for="correo">Correo Electrónico</label>
            <input type='email' id="CorreoElectronico" name="CorreoElectronico" required>

            <button type="submit">Crear Usuario</button>
        </form>
        <a href="admin.php">Volver a la lista de usuarios</a>
    </div>
</body>
</html>
