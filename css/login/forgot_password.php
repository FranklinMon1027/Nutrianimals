<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h2>Restablecer Contraseña</h2>
        <p>Ingrese su dirección de correo electrónico para restablecer su contraseña.</p>
        <form action="reset_password.php" method="post">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <button type="submit">Restablecer Contraseña</button>
        </form>
    </div>
</body>
</html>
