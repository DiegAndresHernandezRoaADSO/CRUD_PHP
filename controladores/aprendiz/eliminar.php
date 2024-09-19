<?php

require_once(__DIR__ . "../../../libs/Database.php");
require_once(__DIR__ . "../../../libs/modelo.php");
include("../../class/Aprendiz.php");

$database = new Database();
$connection = $database->getConnection();
$aprendiz = new Aprendiz($connection);

$id = $_REQUEST['id'];

$aprendiz -> delete($id);

header("Location: listar.php");




