<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Idsubcategoria']) && isset($_POST['nombre_subcateg']) && isset($_POST['Idcategoria'])) {
    include_once('../conexion/dbconect.php');
    
   
    $db = new Connection();
    $conn = $db->open();

    
    class Subcategoria {
        private $conn;

        public function __construct($dbConnection) {
            $this->conn = $dbConnection;
        }

        public function create($idSubcategoria, $nombreSubcategoria, $idCategoria) {
            try {
                $sql = "INSERT INTO subcategorias (Idsubcategoria, nombre_subcateg, Idcategoria) VALUES (?, ?, ?)";
                $stmt = $this->conn->prepare($sql);
                return $stmt->execute([$idSubcategoria, $nombreSubcategoria, $idCategoria]);
            } catch (PDOException $e) {
                throw new Exception("Error al crear subcategoría: " . $e->getMessage());
            }
        }
    }

    
    $subcategoria = new Subcategoria($conn);

    
    $idSubcategoria = htmlspecialchars($_POST['Idsubcategoria']);
    $nombreSubcategoria = htmlspecialchars($_POST['nombre_subcateg']);
    $idCategoria = htmlspecialchars($_POST['Idcategoria']);

    try {
      
        if (empty($idSubcategoria) || empty($nombreSubcategoria) || empty($idCategoria)) {
            throw new Exception('Todos los campos son obligatorios');
        }

        if ($subcategoria->create($idSubcategoria, $nombreSubcategoria, $idCategoria)) {
            $_SESSION['message'] = 'Subcategoría creada exitosamente';
        } else {
            $_SESSION['message'] = 'Error al crear la subcategoría';
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->getMessage();
    } finally {
        
        $db->close();
    }

    
    header('Location: subcategorias.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Subcategoría</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Crear Nueva Subcategoría</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="mb-3">
                <label for="Idsubcategoria" class="form-label">ID Subcategoría:</label>
                <input type="number" class="form-control" id="Idsubcategoria" name="Idsubcategoria" required>
            </div>
            <div class="mb-3">
                <label for="nombre_subcateg" class="form-label">Nombre de la Subcategoría:</label>
                <input type="text" class="form-control" id="nombre_subcateg" name="nombre_subcateg" required>
            </div>
            <div class="mb-3">
                <label for="Idcategoria" class="form-label">ID Categoría:</label>
                <input type="number" class="form-control" id="Idcategoria" name="Idcategoria" required>
            </div>
            <button type="submit" class="btn btn-primary">Crear Subcategoría</button>
        </form>
    </div>
</body>
</html>
