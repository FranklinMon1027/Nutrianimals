<?php
require_once '../conexion/dbconect.php';

class Usuario {
    private $conn;

    public function __construct() {
        $db = new Connection();
        $this->conn = $db->open();
    }

    public function getById($id) {
        $sql = "SELECT * FROM animales WHERE Idanimal=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function update($id, $tipo_animal, $peso, $raza, $edad, $dosis_alimento, $fecha_entrada, $fecha_salida,$idusuarios) {
        $sql = "UPDATE animales SET tipo_animal=?, peso=?, raza=?, edad=?, dosis_alimento=?, fecha_entrada=?, fecha_salida=?, idusuarios=? WHERE Idanimal=?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$tipo_animal, $peso, $raza, $edad, $dosis_alimento, $fecha_entrada, $fecha_salida,$idusuarios, $id]);
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $id = $_POST['id'];
    $tipo_animal = $_POST['tipo_animal'];
    $peso = $_POST['peso'];
    $raza = $_POST['raza'];
    $edad = $_POST['edad'];
    $dosis_alimento = $_POST['dosis_alimento'];
    $fecha_entrada = $_POST['fecha_entrada'];
    $fecha_salida = $_POST['fecha_salida'];
    $idusuarios = $_POST['idusuarios'];

   
    $usuario = new Usuario();
    $usuario->update($id, $tipo_animal, $peso, $raza, $edad, $dosis_alimento, $fecha_entrada, $fecha_salida,$idusuarios);

   
    $_SESSION['message'] = "Vacuna actualizada correctamente.";
    header("Location: animales.php");

    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    
    $id = $_GET['id'];

    $usuario = new Usuario();
    $datosUsuario = $usuario->getById($id);

   
    if (!$datosUsuario) {
        $_SESSION['message'] = "Vacuna  no actualizada.";
        header("Location: animales.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Usuario</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="hidden" name="id" value="<?php echo $datosUsuario['Idanimal']; ?>">
            <div class="form-group">
                <label for="tipo_animal">Tipo Animal:</label>
                <input type="text" class="form-control" id="tipo_animal" name="tipo_animal" value="<?php echo $datosUsuario['tipo_animal']; ?>">
            </div>
            <div class="form-group">
                <label for="peso">Peso:</label>
                <input type="number" class="form-control" id="peso" name="peso" value="<?php echo $datosUsuario['peso']; ?>">
            </div>
            <div class="form-group">
                <label for="raza">Raza:</label>
                <input type="text" class="form-control" id="raza" name="raza" value="<?php echo $datosUsuario['raza']; ?>">
            </div>
            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="number" class="form-control" id="edad" name="edad" value="<?php echo $datosUsuario['edad']; ?>">
            </div>
            <div class="form-group">
                <label for="dosis_alimento">Dosis de Alimento:</label>
                <input type="text" class="form-control" id="dosis_alimento" name="dosis_alimento" value="<?php echo $datosUsuario['dosis_alimento']; ?>">
            </div>
            <div class="form-group">
                <label for="fecha_entrada">Fecha de Entrada:</label>
                <input type="date" class="form-control" id="fecha_entrada" name="fecha_entrada" value="<?php echo $datosUsuario['fecha_entrada']; ?>">
            </div>
            <div class="form-group">
                <label for="fecha_salida">Fecha de Salida:</label>
                <input type="date" class="form-control" id="fecha_salida" name="fecha_salida" value="<?php echo $datosUsuario['fecha_salida']; ?>">
            </div>
            <div class="form-group">
                <label for="idusuarios">idusuarios:</label>
                <input type="number" class="form-control" id="idusuarios" name="idusuarios" value="<?php echo $datosUsuario['idusuarios']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</body>
</html>
