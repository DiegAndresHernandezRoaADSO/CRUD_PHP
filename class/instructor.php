<?php
    include_once('persona.php');
    class Instructor extends Persona{
        protected $Sueldo;
        protected $Horario;

        public function setSueldo($Sueldo){
            $this->Sueldo = $Sueldo;
        }

        public function getSueldo(){
            return $this->Sueldo;
        }

        public function setHorario($Horario){
            $this->Horario = $Horario;
        }

        public function getHorario(){
            return $this->Horario;
        }
    }
?>