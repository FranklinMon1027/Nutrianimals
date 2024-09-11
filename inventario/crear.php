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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $database = new Connection();
        $conn = $database->open();

        // Recibe los datos del formulario
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

        // Inserta los datos en la tabla de inventarios
        $stmt = $conn->prepare("INSERT INTO inventarios (
            nombre_inventario, fecha_creacion, descripcion, idusuarios, id_animal, peso_animal, raza_animal, 
            id_alimento, cantidad_alimento, id_medicamento, lote_medicamento, id_vacuna, unidades_vacuna, 
            id_categoria, id_subcategoria
        ) VALUES (
            :nombre_inventario, :fecha_creacion, :descripcion, :id_usuario, :id_animal, :peso_animal, :raza_animal, 
            :id_alimento, :cantidad_alimento, :id_medicamento, :lote_medicamento, :id_vacuna, :unidades_vacuna, 
            :id_categoria, :id_subcategoria
        )");

        $stmt->bindParam(':nombre_inventario', $nombre_inventario);
        $stmt->bindParam(':fecha_creacion', $fecha_creacion);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':id_usuario', $id_usuario);
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

        $stmt->execute();

        // Cierra la conexión a la base de datos
        $database->close();

        // Redirige al usuario a la página principal de inventarios con un mensaje de éxito
        header("Location: indexx.php?msg=success");
        exit;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        exit;
    }
}

try {
    $database = new Connection();
    $conn = $database->open();

    // Consulta para obtener los inventarios del usuario
    $stmt = $conn->prepare("SELECT * FROM inventarios WHERE idusuarios = :id");
    $stmt->bindParam(':id', $id_usuario);
    $stmt->execute();
    $inventarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Consulta para obtener la lista de animales
    $stmtAnimales = $conn->prepare("SELECT Idanimal, tipo_animal, peso, raza, edad FROM animales");
    $stmtAnimales->execute();
    $animales = $stmtAnimales->fetchAll(PDO::FETCH_ASSOC);

    // Consulta para obtener la lista de alimentos
    $stmtAlimentos = $conn->prepare("SELECT Idalimento, tipo_alimento, lote, marca, cantidad, estado FROM alimentos");
    $stmtAlimentos->execute();
    $alimentos = $stmtAlimentos->fetchAll(PDO::FETCH_ASSOC);

    // Consulta para obtener la lista de medicamentos
    $stmtMedicamentos = $conn->prepare("SELECT id, Nombre, dosis, estado, lote FROM medicamentos");
    $stmtMedicamentos->execute();
    $medicamentos = $stmtMedicamentos->fetchAll(PDO::FETCH_ASSOC);

    // Consulta para obtener la lista de vacunas
    $stmtVacunas = $conn->prepare("SELECT Idvacuna, nombre_vacuna, descripcion, unidades FROM vacunas");
    $stmtVacunas->execute();
    $vacunas = $stmtVacunas->fetchAll(PDO::FETCH_ASSOC);

    // Consulta para obtener la lista de categorías
    $stmtCategorias = $conn->prepare("SELECT Idcategoria, nombre_categoria FROM categorias");
    $stmtCategorias->execute();
    $categorias = $stmtCategorias->fetchAll(PDO::FETCH_ASSOC);

    // Consulta para obtener la lista de subcategorías
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
    <title>Gestión de Inventarios de Animales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .inventory-table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }
        .inventory-table th, .inventory-table td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #e0e0e0;
        }
        .inventory-table th {
            background-color: #fff3cd; /* Color amarillo */
        }
        .icon {
            font-size: 20px;
            color: #007bff;
        }
        .action-buttons .btn {
            margin-right: 5px;
        }
        .interactive-icons {
            margin-top: 10px;
            text-align: center;
        }
        .interactive-icons img {
            width: 50px;
            margin: 0 15px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h2>Mis Inventarios</h2>
        
        <table class="inventory-table table table-striped">
            <thead>
                <tr>
                    <th><i class="fas fa-box"></i> Nombre del Inventario</th>
                    <th><i class="fas fa-calendar-alt"></i> Fecha de Creación</th>
                    <th><i class="fas fa-info-circle"></i> Descripción</th>
                    <th><i class="fas fa-paw"></i> Animal</th>
                    <th><i class="fas fa-utensils"></i> Alimento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($inventarios as $inventario): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($inventario['nombre_inventario']); ?></td>
                        <td><?php echo htmlspecialchars($inventario['fecha_creacion']); ?></td>
                        <td><?php echo htmlspecialchars($inventario['descripcion']); ?></td>
                        <td><?php echo htmlspecialchars($inventario['id_animal']); ?></td>
                        <td><?php echo htmlspecialchars($inventario['id_alimento']); ?></td>
                        <td class="action-buttons">
                            <a href="editar.php?id=<?php echo htmlspecialchars($inventario['id_inventario']); ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="eliminar.php?id=<?php echo htmlspecialchars($inventario['id_inventario']); ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Botón para abrir el modal -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addInventoryModal">
            <i class="fas fa-plus"></i> Agregar Inventario
        </button>

        <!-- Modal para agregar nuevos inventarios -->
        <div class="modal fade" id="addInventoryModal" tabindex="-1" aria-labelledby="addInventoryModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addInventoryModalLabel">Agregar Nuevo Inventario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="">
                            <div class="mb-3">
                                <label for="nombre_inventario" class="form-label">Nombre del Inventario</label>
                                <input type="text" class="form-control" id="nombre_inventario" name="nombre_inventario" required>
                            </div>
                            <div class="mb-3">
                                <label for="fecha_creacion" class="form-label">Fecha de Creación</label>
                                <input type="date" class="form-control" id="fecha_creacion" name="fecha_creacion" required>
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripción</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="id_animal" class="form-label">Animal</label>
                                <select class="form-control" id="id_animal" name="id_animal" required>
                                    <?php foreach ($animales as $animal): ?>
                                        <option value="<?php echo htmlspecialchars($animal['Idanimal']); ?>">
                                            <?php echo htmlspecialchars($animal['tipo_animal']); ?> - <?php echo htmlspecialchars($animal['raza']); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="peso_animal" class="form-label">Peso del Animal</label>
                                <input type="text" class="form-control" id="peso_animal" name="peso_animal" required>
                            </div>
                            <div class="mb-3">
                                <label for="raza_animal" class="form-label">Raza del Animal</label>
                                <input type="text" class="form-control" id="raza_animal" name="raza_animal" required>
                            </div>
                            <div class="mb-3">
                                <label for="id_alimento" class="form-label">Alimento</label>
                                <select class="form-control" id="id_alimento" name="id_alimento" required>
                                    <?php foreach ($alimentos as $alimento): ?>
                                        <option value="<?php echo htmlspecialchars($alimento['Idalimento']); ?>">
                                            <?php echo htmlspecialchars($alimento['tipo_alimento']); ?> - <?php echo htmlspecialchars($alimento['marca']); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="cantidad_alimento" class="form-label">Cantidad de Alimento</label>
                                <input type="text" class="form-control" id="cantidad_alimento" name="cantidad_alimento" required>
                            </div>
                            <div class="mb-3">
                                <label for="id_medicamento" class="form-label">Medicamento</label>
                                <select class="form-control" id="id_medicamento" name="id_medicamento" required>
                                    <?php foreach ($medicamentos as $medicamento): ?>
                                        <option value="<?php echo htmlspecialchars($medicamento['id']); ?>">
                                            <?php echo htmlspecialchars($medicamento['Nombre']); ?> - <?php echo htmlspecialchars($medicamento['dosis']); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="lote_medicamento" class="form-label">Lote del Medicamento</label>
                                <input type="text" class="form-control" id="lote_medicamento" name="lote_medicamento" required>
                            </div>
                            <div class="mb-3">
                                <label for="id_vacuna" class="form-label">Vacuna</label>
                                <select class="form-control" id="id_vacuna" name="id_vacuna" required>
                                    <?php foreach ($vacunas as $vacuna): ?>
                                        <option value="<?php echo htmlspecialchars($vacuna['Idvacuna']); ?>">
                                            <?php echo htmlspecialchars($vacuna['nombre_vacuna']); ?> - <?php echo htmlspecialchars($vacuna['descripcion']); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="unidades_vacuna" class="form-label">Unidades de Vacuna</label>
                                <input type="text" class="form-control" id="unidades_vacuna" name="unidades_vacuna" required>
                            </div>
                            <div class="mb-3">
                                <label for="id_categoria" class="form-label">Categoría</label>
                                <select class="form-control" id="id_categoria" name="id_categoria" required>
                                    <?php foreach ($categorias as $categoria): ?>
                                        <option value="<?php echo htmlspecialchars($categoria['Idcategoria']); ?>">
                                            <?php echo htmlspecialchars($categoria['nombre_categoria']); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="id_subcategoria" class="form-label">Subcategoría</label>
                                <select class="form-control" id="id_subcategoria" name="id_subcategoria" required>
                                    <?php foreach ($subcategorias as $subcategoria): ?>
                                        <option value="<?php echo htmlspecialchars($subcategoria['Idsubcategoria']); ?>">
                                            <?php echo htmlspecialchars($subcategoria['nombre_subcateg']); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Agregar Inventario</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
