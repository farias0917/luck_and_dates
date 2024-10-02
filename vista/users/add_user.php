<?php 
    require_once "home_header.php";
    require __DIR__ . '/../../modelo/modelo.php';

    if ($_POST) {
        if (!(empty($_POST["tipo_doc"]) || empty($_POST["num_doc"]) || empty($_POST["nombre"]) || empty($_POST["apellido"]) || empty($_POST["direccion"]) || empty($_POST["telefono"]) || empty($_POST["correo"]) || empty($_POST["contrasenna"]) || empty($_POST["rol"]))) {

            $num_doc = $_POST["num_doc"];
            $tipo_doc = $_POST["tipo_doc"];
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $direccion = $_POST["direccion"];
            $telefono = $_POST["telefono"];
            $correo = $_POST["correo"];
            $contrasenna = $_POST["contrasenna"];
            $rol = $_POST["rol"];
            $resultado = Modelo::crear_usuario($num_doc, $tipo_doc, $nombre, $apellido, $direccion, $telefono, $correo, $contrasenna, $rol);
            header("location: add_user.php");
        }
    }

    if (isset($_GET["id"])){
        $id = $_GET["id"];
        Modelo::eliminar_usuario($id);
        header("location: add_user.php");
    }
?>

<main>
    <div class="add-users-container">
        <form method="post">
            <h1>Registro de usuarios</h1>
            <div class="form_input">
                <label>Tipo de documento:</label>
                <select name="tipo_doc" id="tipo_doc">
                    <option value="" disabled selected>Tipo de documento</option>
                    <option value="C.C" >C.C</option>
                    <option value="T.I">T.I</option>
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

            <select name="rol" id="rol">
                    <option value="" disabled selected>Rol</option>
                    <option value="1" >Administrador</option>
                    <option value="2">Empleado</option>
                </select>

            <button type="submit">Agregar usuario +</button>
        </form>

        <div class="table-container">
        <?php 
            $consulta = Modelo::traer_usuarios($_SESSION["correo"]);
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <?php if($consulta->rowCount() > 0):?>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tipo doc</th>
                    <th>Num doc</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>dirección</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                    <?php  foreach ($resultado as $result): ?>
                <tr>
                    <td><?php echo $result["id_usuario"] ?></td>
                    <td><?php echo $result["num_doc_usuario"] ?></td>
                    <td><?php echo $result["tipo_doc_usuario"] ?></td>
                    <td><?php echo $result["nombre_usuario"] ?></td>
                    <td><?php echo $result["apellido_usuario"] ?></td>
                    <td><?php echo $result["direccion_usuario"] ?></td>
                    <td><?php echo $result["telefono_usuario"] ?></td>
                    <td><?php echo $result["correo_usuario"] ?></td>
                    <td>
                        <a href="update_user.php?id=<?= $result["id_usuario"] ?>">Editar</a>
                        <a href="add_user.php?id=<?= $result["id_usuario"] ?>">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
                <?php else:?>
                    <h4>No hay usuarios registrados</h4>
                <?php endif?>
        
                <a href="../../reportes.php">Generar reporte de usuarios</a>
        </div>
    </div>
</main>