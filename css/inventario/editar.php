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

// Verifica si se ha enviado el formulario de edición
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $database = new Connection();
        $conn = $database->open();

        // Recibe los datos del formulario
        $id_inventario = $_POST['id_inventario'];
        $nombre_inventario = $_POST['nombre_inventario'];
        $fecha_creacion = $_POST['fecha_creacion'];
        $descripcion = $_POST['descripcion'];
        $id_animal = $_POST['id_animal'];
        $peso_animal = $_POST['peso_animal'];
        $raza_animal = $_POST['raza_animal'];
        $id_alimento = $_POST['id_alimento'];
        $cantidad_alimento = $_POST['cantidad_alimento'];
        $id_medicamento = $_POST['id_medicamento'];
        $lote_medicamento = $_POST['lote_medicamento'];
        $id_vacuna = $_POST['id_vacuna'];
        $unidades_vacuna = $_POST['unidades_vacuna'];
        $id_categoria = $_POST['id_categoria'];
        $id_subcategoria = $_POST['id_subcategoria'];

        // Actualiza los datos en la tabla de inventarios
        $stmt = $conn->prepare("UPDATE inventarios SET
            nombre_inventario = :nombre_inventario,
            fecha_creacion = :fecha_creacion,
            descripcion = :descripcion,
            id_animal = :id_animal,
            peso_animal = :peso_animal,
            raza_animal = :raza_animal,
            id_alimento = :id_alimento,
            cantidad_alimento = :cantidad_alimento,
            id_medicamento = :id_medicamento,
            lote_medicamento = :lote_medicamento,
            id_vacuna = :id_vacuna,
            unidades_vacuna = :unidades_vacuna,
            id_categoria = :id_categoria,
            id_subcategoria = :id_subcategoria
            WHERE id_inventario = :id_inventario AND idusuarios = :id_usuario");

        $stmt->bindParam(':id_inventario', $id_inventario);
        $stmt->bindParam(':nombre_inventario', $nombre_inventario);
        $stmt->bindParam(':fecha_creacion', $fecha_creacion);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':id_animal', $id_animal);
        $stmt->bindParam(':peso_animal', $peso_animal);
        $stmt->bindParam(':raza_animal', $raza_animal);
        $stmt->bindParam(':id_alimento', $id_alimento);
        $stmt->bindParam(':cantidad_alimento', $cantidad_alimento);
        $stmt->bindParam(':id_medicamento', $id_medicamento);
        $stmt->bindParam(':lote_medicamento', $lote_medicamento);
        $stmt->bindParam(':id_vacuna', $id_vacuna);
        $stmt->bindParam(':unidades_vacuna', $unidades_vacuna);
        $stmt->bindParam(':id_categoria', $id_categoria);
        $stmt->bindParam(':id_subcategoria', $id_subcategoria);
        $stmt->bindParam(':id_usuario', $id_usuario);

        $stmt->execute();

        // Cierra la conexión a la base de datos
        $database->close();

        // Redirige al usuario a la página principal de inventarios con un mensaje de éxito
        header("Location: crear.php?msg=success");
        exit;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        exit;
    }
}

// Obtén el ID del inventario a editar
$id_inventario = isset($_GET['id']) ? $_GET['id'] : null;

if (!$id_inventario) {
    header("Location: indexx.php");
    exit;
}

try {
    $database = new Connection();
    $conn = $database->open();

    // Consulta para obtener los detalles del inventario
    $stmt = $conn->prepare("SELECT * FROM inventarios WHERE id_inventario = :id_inventario AND idusuarios = :id_usuario");
    $stmt->bindParam(':id_inventario', $id_inventario);
    $stmt->bindParam(':id_usuario', $id_usuario);
    $stmt->execute();
    $inventario = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$inventario) {
        header("Location: indexx.php");
        exit;
    }

    // Consulta para obtener la lista de animales, alimentos, medicamentos, vacunas, categorías y subcategorías
    $stmtAnimales = $conn->prepare("SELECT Idanimal, tipo_animal, peso, raza, edad FROM animales");
    $stmtAnimales->execute();
    $animales = $stmtAnimales->fetchAll(PDO::FETCH_ASSOC);

    $stmtAlimentos = $conn->prepare("SELECT Idalimento, tipo_alimento, lote, marca, cantidad, estado FROM alimentos");
    $stmtAlimentos->execute();
    $alimentos = $stmtAlimentos->fetchAll(PDO::FETCH_ASSOC);

    $stmtMedicamentos = $conn->prepare("SELECT id, Nombre, dosis, estado, lote FROM medicamentos");
    $stmtMedicamentos->execute();
    $medicamentos = $stmtMedicamentos->fetchAll(PDO::FETCH_ASSOC);

    $stmtVacunas = $conn->prepare("SELECT Idvacuna, nombre_vacuna, descripcion, unidades FROM vacunas");
    $stmtVacunas->execute();
    $vacunas = $stmtVacunas->fetchAll(PDO::FETCH_ASSOC);

    $stmtCategorias = $conn->prepare("SELECT Idcategoria, nombre_categoria FROM categorias");
    $stmtCategorias->execute();
    $categorias = $stmtCategorias->fetchAll(PDO::FETCH_ASSOC);

    $stmtSubcategorias = $conn->prepare("SELECT Idsubcategoria, nombre_subcateg FROM subcategorias");
    $stmtSubcategorias->execute();
    $subcategorias = $stmtSubcategorias->fetchAll(PDO::FETCH_ASSOC);

    // Cierra la conexión a la base de datos
    $database->close();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Editar Inventario</h2>
        <form method="post" action="">
            <input type="hidden" name="id_inventario" value="<?php echo htmlspecialchars($inventario['id_inventario']); ?>">
            <div class="mb-3">
                <label for="nombre_inventario" class="form-label">Nombre del Inventario</label>
                <input type="text" class="form-control" id="nombre_inventario" name="nombre_inventario" value="<?php echo htmlspecialchars($inventario['nombre_inventario']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="fecha_creacion" class="form-label">Fecha de Creación</label>
                <input type="date" class="form-control" id="fecha_creacion" name="fecha_creacion" value="<?php echo htmlspecialchars($inventario['fecha_creacion']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required><?php echo htmlspecialchars($inventario['descripcion']); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="id_animal" class="form-label">Animal</label>
                <select class="form-control" id="id_animal" name="id_animal" required>
                    <?php foreach ($animales as $animal): ?>
                        <option value="<?php echo htmlspecialchars($animal['Idanimal']); ?>" <?php echo $animal['Idanimal'] == $inventario['id_animal'] ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($animal['tipo_animal']); ?> - <?php echo htmlspecialchars($animal['raza']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="peso_animal" class="form-label">Peso del Animal</label>
                <input type="number" class="form-control" id="peso_animal" name="peso_animal" value="<?php echo htmlspecialchars($inventario['peso_animal']); ?>" step="0.01" required>
            </div>
            <div class="mb-3">
                <label for="raza_animal" class="form-label">Raza del Animal</label>
                <input type="text" class="form-control" id="raza_animal" name="raza_animal" value="<?php echo htmlspecialchars($inventario['raza_animal']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="id_alimento" class="form-label">Alimento</label>
                <select class="form-control" id="id_alimento" name="id_alimento" required>
                    <?php foreach ($alimentos as $alimento): ?>
                        <option value="<?php echo htmlspecialchars($alimento['Idalimento']); ?>" <?php echo $alimento['Idalimento'] == $inventario['id_alimento'] ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($alimento['tipo_alimento']); ?> - <?php echo htmlspecialchars($alimento['marca']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="cantidad_alimento" class="form-label">Cantidad de Alimento</label>
                <input type="number" class="form-control" id="cantidad_alimento" name="cantidad_alimento" value="<?php echo htmlspecialchars($inventario['cantidad_alimento']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="id_medicamento" class="form-label">Medicamento</label>
                <select class="form-control" id="id_medicamento" name="id_medicamento" required>
                    <?php foreach ($medicamentos as $medicamento): ?>
                        <option value="<?php echo htmlspecialchars($medicamento['id']); ?>" <?php echo $medicamento['id'] == $inventario['id_medicamento'] ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($medicamento['Nombre']); ?> - <?php echo htmlspecialchars($medicamento['lote']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="lote_medicamento" class="form-label">Lote de Medicamento</label>
                <input type="text" class="form-control" id="lote_medicamento" name="lote_medicamento" value="<?php echo htmlspecialchars($inventario['lote_medicamento']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="id_vacuna" class="form-label">Vacuna</label>
                <select class="form-control" id="id_vacuna" name="id_vacuna" required>
                    <?php foreach ($vacunas as $vacuna): ?>
                        <option value="<?php echo htmlspecialchars($vacuna['Idvacuna']); ?>" <?php echo $vacuna['Idvacuna'] == $inventario['id_vacuna'] ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($vacuna['nombre_vacuna']); ?> - <?php echo htmlspecialchars($vacuna['descripcion']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="unidades_vacuna" class="form-label">Unidades de Vacuna</label>
                <input type="number" class="form-control" id="unidades_vacuna" name="unidades_vacuna" value="<?php echo htmlspecialchars($inventario['unidades_vacuna']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="id_categoria" class="form-label">Categoría</label>
                <select class="form-control" id="id_categoria" name="id_categoria" required>
                    <?php foreach ($categorias as $categoria): ?>
                        <option value="<?php echo htmlspecialchars($categoria['Idcategoria']); ?>" <?php echo $categoria['Idcategoria'] == $inventario['id_categoria'] ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($categoria['nombre_categoria']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="id_subcategoria" class="form-label">Subcategoría</label>
                <select class="form-control" id="id_subcategoria" name="id_subcategoria" required>
                    <?php foreach ($subcategorias as $subcategoria): ?>
                        <option value="<?php echo htmlspecialchars($subcategoria['Idsubcategoria']); ?>" <?php echo $subcategoria['Idsubcategoria'] == $inventario['id_subcategoria'] ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($subcategoria['nombre_subcateg']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="indexx.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
