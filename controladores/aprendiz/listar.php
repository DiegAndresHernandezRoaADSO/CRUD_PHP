<?php

require_once(__DIR__ . "../../../libs/Database.php");
require_once(__DIR__ . "../../../libs/modelo.php");
include("../../class/Aprendiz.php");


$database = new Database();
$connection = $database->getConnection();
$aprendiz = new Aprendiz($connection);


$lista = $aprendiz->getAll();

 ?>

<table border=2>
    <thead>
        <th>Id</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>DNI</th>
        <th>Ficha</th>
        <th>Promedio</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        <?php
        for($i = 0;$i <count($lista); $i++){
        ?>
        <tr>
            <td> <?=$lista[$i]["id"]?></td>
            <td> <?=$lista[$i]["first_name"]?></td>
            <td> <?=$lista[$i]["last_name"]?></td>
            <td> <?=$lista[$i]["email"]?></td>
            <td> <?=$lista[$i]["phone"]?></td>
            <td> <?=$lista[$i]["dni"]?></td>
            <td> <?=$lista[$i]["user_account"]?></td>
            <td> <?=$lista[$i]["average"]?></td>


            <td>
                <div>
                    <a href="editar.php?id=<?= $lista[$i]["id"]?>">Editar</a>
                    <form action="eliminar.php" method ="post">
                        <input type="hidden" name ="id" value="<?=$lista[$i]["id"]?>">
                        <button type="submit">Eliminar</button>
                    </form>
                </div>
            
            </td>
        </tr>
        
        <?php } ?>
    </tbody>
</table>


