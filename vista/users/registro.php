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
        <form>
            <h1>Registro</h1>
            <div class="form_input">
                <label>Tipo de documento:</label>
                <select name="tipo_doc" id="tipo_doc">
                    <option value="" disabled selected>Tipo de documento</option>
                    <option value="cc" >C.C</option>
                    <option value="ti">T.I</option>
                </select>
            </div>

            <div class="form_input">
                <label for="num_doc">Número de documento:</label>
                <input type="number" placeholder="Ingresa tu numero de documento" id="num_doc" name="num_doc">
            </div>
    

            <div class="form_input">
                <label for="nombre">Nombre:</label>
                <input type="text" placeholder="Ingresa tu nombre" id="nombre" name="nombre">
            </div>

            
            <div class="form_input">
                <label for="apellido">Apellido:</label>
                <input type="text" placeholder="Ingresa tu apellido" id="apellido" name="apellido">
            </div>

               
            <div class="form_input">
                <label for="direccion">Dirección:</label>
                <input type="text" placeholder="Ingresa tu dirección" id="direccion" name="direccion">
            </div>

                 
            <div class="form_input">
                <label for="telefono">Teléfono:</label>
                <input type="number" placeholder="Ingresa número de teléfono" id="telefono" name="telefono">
            </div>
    
            <div class="form_input">
                <label for="correo">Correo:</label>
                <input type="email" placeholder="Ingresa tu correo" id="correo" name="correo">
            </div>
    
            <div class="form_input">
                <label for="contrasenna">Contraseña:</label>
                <input type="password" placeholder="Ingresa tu contraseña" id="contrasenna" name="contrasenna">
            </div>

            <button type="submit">Registrarse</button>
            <a href="login.php">¿Ya tienes una cuenta?</a>
        </form>
    </div>

    <footer>
        <img src="../img/logo.jfif" alt="">
        <h2>La mejor barberia</h2>
        <p>Juan Farías  | copyright© 2024</p>
    </footer>
</body>
</html>