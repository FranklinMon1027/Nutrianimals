<?php
session_start();
include '../conexion/dbconect.php'; // Incluye el archivo de conexión a la base de datos

// Verifica si el usuario está autenticado
if (!isset($_SESSION['id'])) {
    header("Location: ../../login/index.php"); // Redirige al login si no está autenticado
    exit;
}

// Obtén el ID del usuario de la sesión
$id_usuario = $_SESSION['id'];

// Verifica si se ha enviado la solicitud de eliminación
if (isset($_GET['id'])) {
    $id_inventario = $_GET['id'];

    try {
        $database = new Connection();
        $conn = $database->open();

        // Elimina el registro de la tabla de inventarios
        $stmt = $conn->prepare("DELETE FROM inventarios WHERE id_inventario = :id_inventario AND idusuarios = :id_usuario");
        $stmt->bindParam(':id_inventario', $id_inventario);
        $stmt->bindParam(':id_usuario', $id_usuario);
        $stmt->execute();

        // Cierra la conexión a la base de datos
        $database->close();

        // Redirige al usuario a la página principal de inventarios con un mensaje de éxito
        header("Location: crear.php?msg=deleted");
        exit;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        exit;
    }
} else {
    header("Location: indexx.php");
    exit;
}
?>
