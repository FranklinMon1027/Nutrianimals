<?php
session_start();
require_once '../conexion/dbconect.php';

class Usuario {
    private $conn;

    public function __construct() {
        $db = new Connection();
        $this->conn = $db->open();
    }

    public function delete($nombreSubcategoria, $idSubcategoria) {
        $sql = "DELETE FROM subcategorias WHERE nombre_subcateg = ? AND Idsubcategoria = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$nombreSubcategoria, $idSubcategoria]);
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombreSubcategoria = $_POST['nombre_subcateg'];
    $idSubcategoria = $_POST['Idsubcategoria'];

    
    $usuario = new Usuario();
    if ($usuario->delete($nombreSubcategoria, $idSubcategoria)) {
        $_SESSION['message'] = 'Usuario eliminado con éxito.';
    } else {
        $_SESSION['message'] = 'Ocurrió un error al intentar eliminar el usuario.';
    }

    
    header("Location: subcategorias.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario por Subcategoría</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Eliminar Usuario por Subcategoría</h1>

        <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-info"><?php echo $_SESSION['message']; ?></div>
            <?php unset($_SESSION['message']); ?>
        <?php } ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="nombre_subcateg">Nombre de la Subcategoría:</label>
                <input type="text" class="form-control" id="nombre_subcateg" name="nombre_subcateg" required>
            </div>
            <div class="form-group">
                <label for="Idsubcategoria">ID de la Subcategoría:</label>
                <input type="text" class="form-control" id="Idsubcategoria" name="Idsubcategoria" required>
            </div>
            <button type="submit" class="btn btn-danger">Eliminar Usuario</button>
            <a href="listar_usuarios.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
