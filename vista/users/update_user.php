<?php 
    require_once "home_header.php";
    require __DIR__ . '/../../modelo/modelo.php';


    if (isset($_GET["id"])){
        $id = $_GET["id"];
        $consulta = Modelo::traer_usuario_por_id($id);
        $resultado = $consulta->fetch();
    }

    
    if ($_POST) {
        if (!(empty($_POST["update_tipo_doc"]) || empty($_POST["update_num_doc"]) || empty($_POST["update_nombre"]) || empty($_POST["update_apellido"]) || empty($_POST["update_direccion"]) || empty($_POST["update_telefono"]) || empty($_POST["update_correo"]) || empty($_POST["update_contrasenna"]) || empty($_POST["update_rol"]))) {
            $num_doc = $_POST["update_num_doc"];
            $tipo_doc = $_POST["update_tipo_doc"];
            $nombre = $_POST["update_nombre"];
            $apellido = $_POST["update_apellido"];
            $direccion = $_POST["update_direccion"];
            $telefono = $_POST["update_telefono"];
            $correo = $_POST["update_correo"];
            $contrasenna = $_POST["update_contrasenna"];
            $rol = $_POST["update_rol"];
            Modelo::actualizar_usuario($num_doc, $tipo_doc, $nombre, $apellido, $direccion, $telefono, $correo, $contrasenna, $rol, $id);
            header("location: add_user.php");
        }else{
            echo "vacio";
        }
    }
?>

<main>
    <div class="add-users-container">
        <form method="post">
            <h1>Actualizar usuario</h1>
            <div class="form_input">
                <label>Tipo de documento:</label>
                <select name="update_tipo_doc" id="tipo_doc">
                    <option value="<?= $resultado["tipo_doc_usuario"] ?>" selected><?= $resultado["tipo_doc_usuario"] ?></option>
                    <option value="C.C" >C.C</option>
                    <option value="T.I">T.I</option>
                </select>
            </div>

            <div class="form_input">
                <label for="num_doc">Número de documento:</label>
                <input type="number" placeholder="Ingresa tu numero de documento" id="num_doc" name="update_num_doc" value="<?= $resultado["num_doc_usuario"] ?>">
            </div>
    

            <div class="form_input">
                <label for="nombre">Nombre:</label>
                <input type="text" placeholder="Ingresa tu nombre" id="nombre" name="update_nombre" value="<?= $resultado["nombre_usuario"] ?>">
            </div>

            
            <div class="form_input">
                <label for="apellido">Apellido:</label>
                <input type="text" placeholder="Ingresa tu apellido" id="apellido" name="update_apellido" value="<?= $resultado["apellido_usuario"] ?>">
            </div>

               
            <div class="form_input">
                <label for="direccion">Dirección:</label>
                <input type="text" placeholder="Ingresa tu dirección" id="direccion" name="update_direccion" value="<?= $resultado["direccion_usuario"] ?>">
            </div>

                 
            <div class="form_input">
                <label for="telefono">Teléfono:</label>
                <input type="number" placeholder="Ingresa número de teléfono" id="telefono" name="update_telefono" value="<?= $resultado["telefono_usuario"] ?>">
            </div>
    
            <div class="form_input">
                <label for="correo">Correo:</label>
                <input type="email" placeholder="Ingresa tu correo" id="correo" name="update_correo" value="<?= $resultado["correo_usuario"] ?>">
            </div>
    
            <div class="form_input">
                <label for="contrasenna">Contraseña:</label>
                <input type="password" placeholder="Ingresa tu contraseña" id="contrasenna" name="update_contrasenna" value="<?= $resultado["pass_usuario"] ?>">
            </div>

            <select name="update_rol" id="rol">
                    <option value="<?= $resultado["id_rol_fk"] ?>" selected><?= $resultado["id_rol_fk"] ?></option>
                    <option value="1" >Administrador</option>
                    <option value="2">Empleado</option>
                </select>

            <button type="submit">Actualizar usuario</button>
        </form>
</main>