<?php
session_start();
require_once '../conexion/dbconect.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $conn = new mysqli("localhost", "root", "", "nutrianimlals");

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

    if ($id <= 0) {
        echo "ID de usuario no válido";
        exit;
    }

    try {
        
        $conn->begin_transaction();

        
        $delete_subcategorias_stmt = $conn->prepare("DELETE FROM subcategorias WHERE Idcategoria IN (SELECT Idcategoria FROM categorias WHERE idusuarios = ?)");
        $delete_subcategorias_stmt->bind_param("i", $id);
        $delete_subcategorias_stmt->execute();
        $delete_subcategorias_stmt->close();

      
        $delete_categorias_stmt = $conn->prepare("DELETE FROM categorias WHERE idusuarios = ?");
        $delete_categorias_stmt->bind_param("i", $id);
        $delete_categorias_stmt->execute();
        $delete_categorias_stmt->close();

        
        $delete_usuario_stmt = $conn->prepare("DELETE FROM usuarios WHERE id = ?");
        $delete_usuario_stmt->bind_param("i", $id);
        $delete_usuario_stmt->execute();
        $delete_usuario_stmt->close();

        
        $conn->commit();

        $_SESSION['message'] = "Usuario eliminado exitosamente";

    } catch (Exception $e) {
        
        $conn->rollback();
        $_SESSION['message'] = "Error al eliminar el usuario: " . $e->getMessage();
    } finally {
        $conn->close();
    }

    header('Location: indexx.php');
    exit;
} else {
    echo "Acceso no autorizado";
}
?>
