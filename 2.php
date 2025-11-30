<?php

// Ejercicio 2.- Imprimir el promedio de tres números mediante la creación de una clase 
// llamada 'Average' con un método para calcular e imprimir el promedio.

    class Average{

        private $num1;
        private $num2;
        private $num3;

        public function __construct($num1, $num2, $num3){
            $this->num1= $num1;
            $this->num2= $num2;
            $this->num3= $num3;
        }

        public function __destruct(){

        }

        public function getNum1(){
            return $this->num1;
        }

        public function getNum2(){
            return $this->num2;
        }

        public function getNum3(){
            return $this->num3;
        }

        public function setNum1($num1){
            $this->num1= $num1;
        }

        public function setNum2($num2){
            $this->num2= $num2;
        }

        public function setNum3($num3){
            $this->num3= $num3;
        }

        public function calcPromedio(){
            $prom= ($this->num1 + $this->num2 + $this->num3) / 3;
            return $prom;
        }
    }

    $notas= new Average(4, 6, 8);
    $promedio = $notas->calcPromedio();
    echo "El promedio es: $promedio <br>";



?>