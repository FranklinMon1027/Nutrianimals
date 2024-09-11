<?php
session_start();
require_once '../conexion/dbconect.php';

class Categoria {
    private $conn;

    public function __construct($dbConnection) {
        $this->conn = $dbConnection;
    }

    public function create($idCategoria, $nombreCategoria, $idUsuarios) {
        try {
            $sql = "INSERT INTO categorias (Idcategoria, nombre_categoria, idusuarios) VALUES (?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([$idCategoria, $nombreCategoria, $idUsuarios]);
        } catch (PDOException $e) {
            throw new Exception("Error al crear categoría: " . $e->getMessage());
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
            throw new Exception('Todos los campos son obligatorios');
        }

        if ($categoria->create($idCategoria, $nombreCategoria, $idUsuarios)) {
            $_SESSION['message'] = 'Categoría creada exitosamente';
        } else {
            $_SESSION['message'] = 'Error al crear la categoría';
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->getMessage();
    } finally {
        $db->close();
    }

    header('Location: categorias.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Categoría</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Crear Nueva Categoría</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="mb-3">
                <label for="Idcategoria" class="form-label">ID Categoría:</label>
                <input type="number" class="form-control" id="Idcategoria" name="Idcategoria" required>
            </div>
            <div class="mb-3">
                <label for="nombre_categoria" class="form-label">Nombre de la Categoría:</label>
                <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria" required>
            </div>
            <div class="mb-3">
                <label for="idusuarios" class="form-label">ID Usuario:</label>
                <input type="number" class="form-control" id="idusuarios" name="idusuarios" required>
            </div>
            <button type="submit" class="btn btn-primary">Crear Categoría</button>
        </form>
    </div>
</body>
</html>
