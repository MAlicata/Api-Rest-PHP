<?php
/*
Pilares del POO:
Abstraccion
Polimorfismo 
Encapsulamiento
Herencia

No existe la sobrecarga en php de constructores
*/
    class Usuario{
        private $nombre;
        private $apellido;
        private $fechaNacimiento;
        private $pais;

        public function __construct($nombre, $apellido, $fechaNacimiento, $pais){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->fechaNacimiento = $fechaNacimiento;
            $this->pais = $pais;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setApellido($apellido){
            $this->apellido = $apellido;
        }

        public function getApellido(){
            return $this->apellido;
        }

        public function __toString(){
            return $this->nombre ." ".$this->apellido. " (".$this->fechaNacimiento.",".$this->pais.")";
        }

        //CRUD
        public function saveUsuario(){

        }
        public function getUsuario(){

        }
        public function updateUsuario(){

        }
        public function deleteUsuarios(){

        }
    }
?>