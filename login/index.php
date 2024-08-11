
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h2>Iniciar sesión</h2>
        
        <?php
        // Muestra un mensaje de error si existe
        if (isset($error)) {
            echo '<p class="error">' . $error . '</p>';
        }
        ?>

        <form action="login.php" method="post">
            <h1 class="animate__animated animate__backInLeft">Sistema de login</h1>
            <p>Usuario <input type="text" placeholder="Ingrese su nombre" name="usuario" required></p>
            <p>Contraseña <input type="password" placeholder="Ingrese su contraseña" name="contraseña" required></p>
            <button type="submit">Iniciar sesión</button>
        </form>

        <p>¿No tienes una cuenta? <a href="registroo.php">Regístrate aquí</a>.</p>  
        <a href="forgot_password.php">Olvidé mi contraseña</a>
    </div>
</body>
</html>
