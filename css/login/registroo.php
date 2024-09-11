<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="css/stylesregistro.css">
</head>
<body>
    <h2>Registro de Usuario</h2>
    <form action="registro.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellido">Apellido:</label><br>
        <input type="text" id="apellido" name="apellido" required><br><br>

        <label for="usuario">Nombre de Usuario:</label><br>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="contraseña">Contraseña:</label><br>
        <input type="password" id="contraseña" name="contraseña" required><br><br>

        <label for="confirmar_contraseña">Confirmar Contraseña:</label><br>
        <input type="password" id="confirmar_contraseña" name="confirmar_contraseña" required><br><br>

        <label for="tipo_documento">Tipo de Documento:</label><br>
        <select id="tipo_documento" name="tipo_documento" required>
            <option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
            <option value="Cédula de Extranjería">Cédula de Extranjería</option>
            <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
            <option value="NIT">NIT</option>
        </select><br><br>

        <label for="documento_identidad">Documento de Identidad:</label><br>
        <input type="text" id="documento_identidad" name="documento_identidad" required><br><br>

        <label for="correo_electronico">Correo Electrónico:</label><br>
        <input type="email" id="correo_electronico" name="correo_electronico" required><br><br>

        <label for="id_cargo" class="form-label">ID Cargo:</label>
        <select class="form-control" id="id_cargo" name="id_cargo" required>
            <option value="1">administrador</option>
            <option value="2">usuario</option>
        </select><br><br>

        <input type="submit" value="Registrar">
    </form>
</body>
</html>
