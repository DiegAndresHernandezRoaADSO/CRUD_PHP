<?php

    class Persona extends Modelo {
        protected $Nombre;
        protected $Apellido;
        protected $Edad;//?
        protected $Telefono;
        protected $Correo;
        protected $Documento;
        protected $Direccion;//?


        public function __construct(
            $id,
            $table,
            $connection
        ) {
            parent::__construct($id, $table, $connection);
        }

        public function getNombre() {
            return $this->Nombre;
        }

        public function setNombre($Nombre) {
            $this->Nombre = $Nombre;
        }

        public function getApellido() {
            return $this->Apellido;
        }

        public function setApellido($Apellido) {
            $this->Apellido = $Apellido;
        }

        public function getEdad(){
            return $this->Edad;
        }

        public function setEdad($Edad){
            $this->Edad = $Edad;
        }

        public function getTelefono() {
            return $this->Telefono;
        }

        public function setTelefono($Telefono) {
            $this->Telefono = $Telefono;
        }

        public function getCorreo() {
            return $this->Correo;
        }

        public function setCorreo($Correo) {
            $this->Correo = $Correo;
        }

        public function getDocumento(){
            return $this->Documento;
        }

        public function setDocumento($Documento){
            $this->Documento = $Documento;
        }

        public function getDireccion(){
            return $this->Direccion;
        }

        public function setDireccion($Direccion){
            $this->Direccion = $Direccion;
        }

        public function getFN() {
            return "El nombre completo es: " . $this->Nombre . " " . $this->Apellido;
        }
    }
?>