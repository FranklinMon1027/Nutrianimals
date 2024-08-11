<?php
session_start();
require_once '../conexion/dbconect.php'; // Asegúrate de que el nombre del archivo sea correcto

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

try {
    $database = new Connection();
    $conn = $database->open();

    $stmt = $conn->prepare("SELECT id_cargo, id FROM usuarios WHERE usuario = ? AND contraseña = ?");
    $stmt->execute([$usuario, $contraseña]);

    // Utilizamos rowCount para contar las filas
    if ($stmt->rowCount() > 0) {
        // Bind de los resultados usando fetch
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $id_cargo = $result['id_cargo'];
        $id_usuario = $result['id'];

        $_SESSION['usuario'] = $usuario;
        $_SESSION['id'] = $id_usuario;

        if ($id_cargo == 1) {
            header("Location: http://localhost/pg%20admin%20y%20usu/indexxx.php?id=".$id_usuario);
            exit;
        } elseif ($id_cargo == 2) {
            header("Location: ../usu/index.html");
            exit;
        }
    } else {
        if (file_exists("../index.php")) {
            include("../index.php");
        } else {
            echo '<h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>';
        }
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// No es necesario cerrar explícitamente la conexión en PDO
// $database->close(); 
?>
