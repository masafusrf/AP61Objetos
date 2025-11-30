<?php


// Ejercicio 1.- Escribe un programa para imprimir el área y el perímetro de un triángulo 
// creando una clase llamada 'Triangle'. El triángulo tendrá como propiedades sus 3 lados. 
// Puedes utilizar un constructor. Utiliza la fórmula de Heron.

class Triangle{

    private $lado1;
    private $lado2;
    private $lado3;

    public function getLado1(){
        return $this->lado1;
    }

    public function getLado2(){
        return $this->lado2;
    }

    public function getLado3(){
        return $this->lado3;
    }

    public function setLado1($lado1){
        $this->lado1= $lado1;
    }

    public function setLado2($lado2){
        $this->lado2= $lado2;
    }

    public function setLado3($lado3){
        $this->lado3= $lado3;
    }

    public function __construct($lado1, $lado2, $lado3){
        $this->lado1= $lado1;
        $this->lado2= $lado2;
        $this->lado3= $lado3;
    }

    public function __destruct(){

    }

    public function calcPerim($lado1, $lado2, $lado3){

        $perim= $lado1 + $lado2 + $lado3;
        return $perim;

    }

    public function calcArea($lado1, $lado2, $lado3){

        if (($lado1 + $lado2 <= $lado3) || 
            ($lado2 + $lado3 <= $lado1) ||
            ($lado1 + $lado3 <= $lado2)) {

                return false;
            }
    
        $semiP= ($lado1 + $lado2 + $lado3) / 2;
        $area= sqrt($semiP * ($semiP - $lado1) * ($semiP - $lado2) * ($semiP - $lado3));
        return $area;
        
    }
}

    $triangulo1= new Triangle(2, 4, 6);

    $perim = $triangulo1->calcPerim(2, 4, 6);
    echo "El perímetro es de $perim <br>";

    $area = $triangulo1->calcArea(2, 4, 6);
    if ($area == false){
        echo "Los lados no forman un triángulo válido. <br>";
    } else{
        echo "El área del triángulo es de $area <br>";
    }

?>