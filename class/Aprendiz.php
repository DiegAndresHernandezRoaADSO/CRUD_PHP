<?php
    include_once('persona.php');
    class Aprendiz extends Persona
    {
        protected $Cuenta;
        protected $Promedio;

        public function __construct(
            PDO $connection
        )
        {
            parent::__construct("id", "users", $connection);
        }

        public function setCuenta($Cuenta){
            $this->Cuenta = $Cuenta;
        }

        public function getCuenta(){
            return $this->Cuenta;
        }

        public function setPromedio($Promedio){
            $this->Promedio = $Promedio;
        }

        public function getPromedio(){
            return $this->Promedio;
        }

        

    }
?>