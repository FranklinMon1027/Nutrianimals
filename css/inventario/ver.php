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

try {
    $database = new Connection();
    $conn = $database->open();

    // Consulta para obtener los inventarios del usuario autenticado
    $stmt = $conn->prepare("SELECT * FROM inventarios WHERE idusuarios = :id_usuario");
    $stmt->bindParam(':id_usuario', $id_usuario);
    $stmt->execute();
    $inventarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            font-size: 1.25rem;
            border-bottom: 1px solid #ddd;
        }
        .card-body {
            padding: 1.25rem;
        }
        .dataTable {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }
        .dataTable th, .dataTable td {
            text-align: left;
            padding: 8px;
        }
        .dataTable tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 0.5em 1em;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php include '../inventario/ab.php'; ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Administrador de Inventarios</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>

                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">Crear Inventario</div>
                            <div class="card-body">
                                <p>Crea un nuevo inventario de animales.</p>
                                <a href="crear.php?id=<?php echo urlencode($id_usuario); ?>" class="btn btn-primary">Ir</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">Ver Inventarios</div>
                            <div class="card-body">
                                <p>Consulta los inventarios existentes.</p>
                                <a href="ver_inventario.php?id=<?php echo urlencode($id_usuario); ?>" class="btn btn-primary">Ir</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">Cerrar Sesión</div>
                            <div class="card-body">
                                <p>Finaliza tu sesión de usuario.</p>
                                <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <h2>Mis Inventarios</h2>
                    <table id="inventariosTable" class="dataTable display" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID Inventario</th>
                                <th>Nombre</th>
                                <th>Fecha Creación</th>
                                <th>Descripción</th>
                                <th>Peso Animal</th>
                                <th>Raza Animal</th>
                                <th>Cantidad Alimento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($inventarios as $inventario): ?>
                                <tr>
                                    <td><?php echo $inventario['id_inventario']; ?></td>
                                    <td><?php echo $inventario['nombre_inventario']; ?></td>
                                    <td><?php echo $inventario['fecha_creacion']; ?></td>
                                    <td><?php echo $inventario['descripcion']; ?></td>
                                    <td><?php echo $inventario['peso_animal']; ?></td>
                                    <td><?php echo $inventario['raza_animal']; ?></td>
                                    <td><?php echo $inventario['cantidad_alimento']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"></script>
        <script>
            // Inicializa DataTable
            const dataTable = new simpleDatatables.DataTable("#inventariosTable");
        </script>
    </div>
</body>
</html>
