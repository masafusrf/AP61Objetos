<?php

    // Ejercicio 3.- Escribe un programa creando una clase 'Empleado' 
    // (propiedades: nombre, salarioHora, horasDia), que tenga los 
    // siguientes métodos e imprima el salario final.

    // getInfo() que toma el salarioHora, el número de horas de trabajo 
    // por día del empleado como parámetro y devuelve el salario mensual.
    // AddSal() que añade 10€ al salarioHora del empleado si es inferior a 500€ de salario mensual.
    // AddWork() que añade 5€ al salarioHora del empleado si el número de horas 
    // de trabajo por día es superior a 6 horas.


    class Empleado{
        
        private $nombre;
        private $salarioHora;
        private $horasDia;

        public function __construct($nombre, $salarioHora, $horasDia){
            $this->nombre= $nombre;
            $this->salarioHora= $salarioHora;
            $this->horasDia= $horasDia;
        }

        public function __destruct(){

        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getSalarioHora(){
            return $this->salarioHora;
        }

        public function getHorasDia(){
            return $this->horasDia;
        }

        public function setNombre($nombre){
            $this->nombre= $nombre;
        }

        public function setSalarioHora($salarioHora){
            $this->salarioHora= $salarioHora;
        }

        public function setHorasDia($horasDia){
            $this->horasDia= $horasDia;
        }

            // getInfo() que toma el salarioHora, el número de horas de trabajo 
            // por día del empleado como parámetro y devuelve el salario mensual.

        public function getInfo($salarioHora, $horasDia){

            $salMens= $salarioHora * $horasDia * 30;
            return $salMens;
        }


            // AddSal() que añade 10€ al salarioHora del empleado si es inferior a 500€ de salario mensual.


        public function AddSal($salMens){

            $this->salarioHora = ($salMens<500) ? $this->salarioHora + 10 : $this->salarioHora;
            return $this->salarioHora;

        }

            // AddWork() que añade 5€ al salarioHora del empleado si el número de horas 
            // de trabajo por día es superior a 6 horas.

        public function AddWork(){

            $this->salarioHora = ($this->horasDia>6) ? $this->salarioHora + 5 : $this->salarioHora;
            return $this->salarioHora;

        }

    }

    $empleado = new Empleado ("Juan", 15, 7);

    $salMens = $empleado->getInfo($empleado->getSalarioHora(), $empleado->getHorasDia());
    echo "Salario mens inic: $salMens €<br>";

    $empleado->AddSal($salMens);

    $empleado->AddWork();

    $salFinal = $empleado->getInfo($empleado->getSalarioHora(), $empleado->getHorasDia());
    echo "Salario final mensual: $salFinal €";

?>