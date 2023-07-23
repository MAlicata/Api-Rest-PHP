<?php
    include_once('class-persona.php');
    class Alumno extends Persona{
        private $cuenta;
        private $promedio;

        public function __construct(
            $nombre,
            $apellido,
            $edad,
            $genero,
            $carrera, 
            $cuenta, 
            $promedio){
            parent::__construct($nombre, $apellido, $edad, $genero, $carrera);
            $this->cuenta = $cuenta;
            $this->promedio = $promedio;
        }

        public function cancelarClase(){
                echo 'Cancelar clase del alumno' .$this->nombre;
        }
        public function cambiarCarrera(){}
        

        /**
         * Get the value of cuenta
         */
        public function getCuenta()
        {
                return $this->cuenta;
        }

        /**
         * Set the value of cuenta
         */
        public function setCuenta($cuenta): self
        {
                $this->cuenta = $cuenta;

                return $this;
        }

        /**
         * Get the value of promedio
         */
        public function getPromedio()
        {
                return $this->promedio;
        }

        /**
         * Set the value of promedio
         */
        public function setPromedio($promedio): self
        {
                $this->promedio = $promedio;

                return $this;
        }

        public function matricular(){
                parent::matricular();
                echo 'Matricular alumno<br>';
        }

        public function reprobar(){
                echo "Reprobar alumno<br>";
        }
        public function aprobar(){
                echo "Aprobar Alumno<br>";
        }
    }
?>