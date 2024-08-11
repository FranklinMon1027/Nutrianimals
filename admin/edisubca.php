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

        public function update($idSubcategoria, $nombreSubcategoria, $idCategoria) {
            try {
                $sql = "UPDATE subcategorias SET nombre_subcateg = ?, Idcategoria = ? WHERE Idsubcategoria = ?";
                $stmt = $this->conn->prepare($sql);
                return $stmt->execute([$nombreSubcategoria, $idCategoria, $idSubcategoria]);
            } catch (PDOException $e) {
                throw new Exception("Error al actualizar subcategoría: " . $e->getMessage());
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

       
        if ($subcategoria->update($idSubcategoria, $nombreSubcategoria, $idCategoria)) {
            $_SESSION['message'] = 'Subcategoría actualizada exitosamente';
        } else {
            $_SESSION['message'] = 'Error al actualizar la subcategoría';
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->getMessage();
    } finally {
        
        $db->close();
    }

    
    header('Location: subcategorias.php');
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['Idsubcategoria'])) {
 
    $idSubcategoria = $_GET['Idsubcategoria'];

    
    include_once('../conexion/dbconect.php');
    
    
    $db = new Connection();
    $conn = $db->open();

    try {
        
        $sql = "SELECT * FROM subcategorias WHERE Idsubcategoria = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$idSubcategoria]);
        $row = $stmt->fetch();

       
        if (!$row) {
            $_SESSION['message'] = 'Subcategoría no encontrada';
            header('Location: subcategorias.php');
            exit();
        }
    } catch (PDOException $e) {
        $_SESSION['message'] = "Hubo un problema al obtener la subcategoría: " . $e->getMessage();
        header('Location: subcategorias.php');
        exit();
    }

   
    $db->close();
} else {
  
    header('Location: subcategorias.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Subcategoría</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Subcategoría</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="hidden" name="Idsubcategoria" value="<?php echo $row['Idsubcategoria']; ?>">
            <div class="mb-3">
                <label for="nombre_subcateg" class="form-label">Nombre de la Subcategoría:</label>
                <input type="text" class="form-control" id="nombre_subcateg" name="nombre_subcateg" value="<?php echo $row['nombre_subcateg']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="Idcategoria" class="form-label">ID Categoría:</label>
                <input type="number" class="form-control" id="Idcategoria" name="Idcategoria" value="<?php echo $row['Idcategoria']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
</body>
</html>
