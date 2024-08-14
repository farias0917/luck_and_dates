

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <div class="container">
        <form method="post">
            <h1>Ingresar</h1>
            <p class="mensaje_error"><?php include "../../controlador/controlador.php"; ?></p>
    
            <div class="form_input">
                <label for="correo">Correo:</label>
                <input type="email" placeholder="Ingresa tu correo" id="correo" name="correo">
            </div>
    
            <div class="form_input">
                <label for="contrasenna">Contraseña:</label>
                <input type="password" placeholder="Ingresa tu contraseña" id="contrasenna" name="contrasenna">
            </div>

            <button type="submit">Iniciar</button>
            <a href="registro.php">¿Aún no tienes una cuenta?</a>
        </form>
    </div>

    <footer>
        <img src="../img/logo.jfif" alt="">
        <h2>La mejor barberia</h2>
        <p>Juan Farías  | copyright© 2024</p>
    </footer>
</body>
</html>