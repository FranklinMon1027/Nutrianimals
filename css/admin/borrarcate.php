<?php
session_start();

include_once('../conexion/dbconect.php'); // Incluye el archivo que define la clase Connection

// Crear una instancia de la clase Connection para abrir la conexión
$database = new Connection();
$conn = $database->open(); // Obtener la conexión PDO

class Categoria {
    private $conn;

    public function __construct($dbConnection) {
        $this->conn = $dbConnection;
    }

    public function delete($idCategoria) {
        try {
            $delete_subcategorias_stmt = $this->conn->prepare("DELETE FROM subcategorias WHERE Idcategoria = ?");
            $delete_subcategorias_stmt->execute([$idCategoria]);

            $delete_stmt = $this->conn->prepare("DELETE FROM categorias WHERE Idcategoria = ?");
            return $delete_stmt->execute([$idCategoria]);
        } catch (PDOException $e) {
            throw new Exception("Error al eliminar categoría: " . $e->getMessage());
        }
    }

    public function getAll() {
        $sql = "SELECT * FROM categorias";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

$categoria = new Categoria($conn);

// Manejo del formulario de eliminación de categoría
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Idcategoria'])) {
    $Idcategoria = htmlspecialchars($_POST['Idcategoria']);

    if (empty($Idcategoria)) {
        $_SESSION['message'] = 'El ID de la categoría es obligatorio';
    } else {
        try {
            if ($categoria->delete($Idcategoria)) {
                $_SESSION['message'] = 'Categoría eliminada correctamente';
            } else {
                $_SESSION['message'] = 'Error al eliminar la categoría';
            }
        } catch (Exception $e) {
            $_SESSION['message'] = $e->getMessage();
        }
    }

    header("Location: categorias.php");
    exit();
}

// Obtener todas las categorías
$categorias = $categoria->getAll();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Categoría</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Eliminar Categoría</h1>

        <?php
        if (isset($_SESSION['message'])) {
            echo '<div class="alert alert-info">' . $_SESSION['message'] . '</div>';
            unset($_SESSION['message']);
        }
        ?>

        <form method="post" action="">
            <div class="form-group">
                <label for="Idcategoria">Seleccione la Categoría a Eliminar:</label>
                <select class="form-control" id="Idcategoria" name="Idcategoria" required>
                    <option value="">Seleccione una categoría</option>
                    <?php
                    foreach ($categorias as $cat) {
                        echo '<option value="' . htmlspecialchars($cat['Idcategoria']) . '">' . htmlspecialchars($cat['nombre_categoria']) . '</option>';
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
</body>
</html>

<?php
// Cerrar la conexión al finalizar
$database->close();
?>
