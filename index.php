
<?php
    require_once(__DIR__ . "/libs/Database.php");
    require_once(__DIR__ . "/libs/modelo.php");
    include('class/Aprendiz.php');


    $database = new Database();
    $connection = $database->getConnection();
    $aprendiz = new Aprendiz($connection);


    $nombre = $_POST["first_name"];
    $apellido = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $dni = $_POST["dni"];


    var_dump($nombre, $apellido,$email,$phone,$dni);

    if(
        !isset($_POST["first_name"])&&
        !isset($_POST["last_name"])&&
        !isset($_POST["email"])&&
        !isset($_POST["phone"])&&
        !isset($_POST["dni"])
    )
    {

        $aprendiz->store([
            'first_name'  =>$_POST["first_name"],
            'last_name'   =>$_POST["first_name"],
            'email'       =>$_POST["email"],
            'dni'         =>$_POST["dni"],
            'user_account'=> isset($_POST["user_account"]) ? $_POST ["user_account"] : "",
            'average'     => isset($_POST["average"]) ? $_POST["average"]: ""
        ]);
    }else{
        echo("no llegaron los datos");
    }


    ?>