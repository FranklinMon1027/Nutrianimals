<?php
session_start();
require_once '../conexion/dbconect.php';

class Categoria {
    private $conn;

    public function __construct($dbConnection) {
        $this->conn = $dbConnection;
    }

    public function update($idCategoria, $nombreCategoria, $idUsuarios) {
        try {
            
            $stmt_check_user = $this->conn->prepare("SELECT id FROM usuarios WHERE id = ?");
            $stmt_check_user->execute([$idUsuarios]);
            $userExists = $stmt_check_user->fetchColumn();

            if (!$userExists) {
                throw new Exception("El usuario con ID $idUsuarios no existe en la tabla usuarios.");
            }

          
            $sql = "UPDATE categorias SET nombre_categoria = ?, idusuarios = ? WHERE Idcategoria = ?";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([$nombreCategoria, $idUsuarios, $idCategoria]);
        } catch (PDOException $e) {
            
            throw new Exception("Error al actualizar categoría: " . $e->getMessage());
        }
    }

    public function getById($idCategoria) {
        try {
            $sql = "SELECT * FROM categorias WHERE Idcategoria = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$idCategoria]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
          
            throw new Exception("Error al obtener categoría por ID: " . $e->getMessage());
        }
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Idcategoria']) && isset($_POST['nombre_categoria']) && isset($_POST['idusuarios'])) {
    $db = new Connection();
    $conn = $db->open();

    $categoria = new Categoria($conn);

    $idCategoria = htmlspecialchars($_POST['Idcategoria']);
    $nombreCategoria = htmlspecialchars($_POST['nombre_categoria']);
    $idUsuarios = htmlspecialchars($_POST['idusuarios']);

    try {
        if (empty($idCategoria) || empty($nombreCategoria) || empty($idUsuarios)) {
            throw new Exception('El ID de la categoría, el nombre de la categoría y el ID de usuario son obligatorios');
        }

        if ($categoria->update($idCategoria, $nombreCategoria, $idUsuarios)) {
            $_SESSION['message'] = 'Categoría actualizada exitosamente';
        } else {
            $_SESSION['message'] = 'Error al actualizar la categoría';
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->getMessage();
    } finally {
        
        $db->close();
    }

    header('Location: categorias.php');
    exit();
} elseif (isset($_GET['Idcategoria'])) {
    $db = new Connection();
    $conn = $db->open();

    $categoria = new Categoria($conn);

    $idCategoria = htmlspecialchars($_GET['Idcategoria']);

    try {
        $categoriaData = $categoria->getById($idCategoria);

        if ($categoriaData) {
            $nombreCategoria = $categoriaData['nombre_categoria'];
            $idUsuarios = $categoriaData['idusuarios'];
        } else {
            $_SESSION['message'] = 'Categoría no encontrada';
            header('Location: categorias.php');
            exit();
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->getMessage();
    } finally {
        
        $db->close();
    }
} else {
    $_SESSION['message'] = 'No se ha especificado una categoría para editar';
    header('Location: categorias.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoría</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Categoría</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="hidden" name="Idcategoria" value="<?php echo $idCategoria; ?>">
            <div class="mb-3">
                <label for="nombre_categoria" class="form-label">Nombre de la Categoría:</label>
                <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria" value="<?php echo $nombreCategoria; ?>" required>
            </div>
            <div class="mb-3">
                <label for="idusuarios" class="form-label">ID Usuario:</label>
                <input type="number" class="form-control" id="idusuarios" name="idusuarios" value="<?php echo $idUsuarios; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</body>
</html>
