<?php

require_once(__DIR__ . "../../../libs/Database.php");
require_once(__DIR__ . "../../../libs/modelo.php");
include("../../class/Aprendiz.php");


$nombre = isset($_POST["first_name"]) ? 
    ($_POST["first_name"] != "" ? $_POST["first_name"] : false) : 
    false;

$apellido = isset($_POST["last_name"]) ? 
    ($_POST["last_name"] != "" ? $_POST["last_name"] : false) : 
    false;

$correo = isset($_POST["email"]) ? 
    ($_POST["email"] != "" ? $_POST["email"] : false) : 
    false;

$telefono = isset($_POST["phone"]) ? 
    ($_POST["phone"] != "" ? $_POST["phone"] : false) : 
    false;

$dni = isset($_POST["dni"]) ? 
    ($_POST["dni"] != "" ? $_POST["dni"] : false) : 
    false;

$cuenta = isset($_POST["user_account"]) ? $_POST["user_account"] : ' ';

$promedio = isset($_POST["average"]) ? $_POST["average"] : ' ';

if ($nombre && $apellido && $correo && $telefono && $dni){
    echo "Datos guardado con exito :)";
    $database = new Database();
    
    $connection = $database->getConnection($database);
    
    $aprendiz = new Aprendiz($connection);

    $valor = $aprendiz -> store([
        'first_name'   => $nombre,
        'last_name'    => $apellido,
        'email'        => $correo,
        'phone'        => $telefono,
        'dni'          => $dni,
        'user_account' => $cuenta,
        'average'      => $promedio
    ]);

    if ($valor != null) {
        header("Location:", "/ADSO/2696521/controladores/listar.php");
    }

}else {
    echo "Faltan campos obligatorios";
}


