<?php

require_once(__DIR__ . "../../../libs/Database.php");
require_once(__DIR__ . "../../../libs/modelo.php");
include("../../class/Aprendiz.php");


$database = new Database();
$connection = $database->getConnection($database);
$aprendiz = new Aprendiz($connection);


$id = $_REQUEST['id'];
$usuario = $aprendiz->getByid($id);

?>

<form action="controladores/aprendiz/Actualizar.php" method="post">
    
    <div>
        <input type=""  name="id"  value="<?=$usuario["id"] ?>">
    </div>

    <div>
        <label for="first_name">Nombre</label>
        <input type="text" name="first_name" value="<?=$usuario["first_name"] ?>" require>
    </div>

    <div>
        <label for="first_name">Apellido</label>
        <input type="text" name="last_name" value="<?=$usuario["last_name"] ?>" require>
    </div>

    <div>
        <label for="birthdate">Fecha de nacimiento</label>
        <input type="date" name="birthdate" value="<?=$usuario["birthdate"] ?>" require>

    </div>

    <div>
        <label for="email">Correo</label>
        <input type="text" name="email" value="<?=$usuario["email"] ?>" require>
    </div>

    <div>
        <label for="phone">Telefono</label>
        <input type="number" name="phone" value="<?=$usuario["phone"] ?>" require>
    </div>

    <div>
        <label for="dni">Dni</label>
        <input type="number" name="dni" value="<?=$usuario["dni"] ?>" require>
    </div>

    <div>
        <label for="user_account">Ficha</label>
        <input type="number" name="user_account" value="<?=$usuario["user_account"] ?>" require>
    </div>

    <div>
        <label for="average">Promedio</label>
        <input type="text" name="average" value="<?=$usuario["average"] ?>"require>
    </div>


    <button type="submit">Actualizar</button>
</form>