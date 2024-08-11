<?php
session_start();

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$conexion = new mysqli("localhost", "root", "", "nutrianimlals");

if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}

$stmt = $conexion->prepare("SELECT id_cargo, id FROM usuarios WHERE usuario = ? AND contraseña = ?");
$stmt->bind_param("ss", $usuario, $contraseña);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($id_cargo, $id_usuario);
    $stmt->fetch();
    $_SESSION['usuario'] = $usuario;
    $_SESSION['id'] = $id_usuario; // Guardamos la ID del usuario en la sesión

    if ($id_cargo == 1) {
        header("Location: index.html");
    } elseif ($id_cargo == 2) {
        header("Location: usu/index.html");
    }
} else {
    if (file_exists("index.php")) {
        include("index.php");
    } else {
        echo '<h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>';
    }
}

$stmt->close();
$conexion->close();
?>
