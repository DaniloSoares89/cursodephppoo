<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

class Carro {
   private $cor;
    private $modelo;
     private $ano;
     public $tanque;
     public $correndo;
     public function getCor() {
         return $this->cor;
     }

     public function getModelo() {
         return $this->modelo;
     }

     public function getAno() {
         return $this->ano;
     }

     public function getTanque() {
         return $this->tanque;
     }

     public function getCorrendo() {
         return $this->correndo;
     }

     public function setCor($cor): void {
         $this->cor = $cor;
     }

     public function setModelo($modelo): void {
         $this->modelo = $modelo;
     }

     public function setAno($ano): void {
         $this->ano = $ano;
     }

     public function setTanque($tanque): void {
         $this->tanque = $tanque;
     }

     public function setCorrendo($correndo): void {
         $this->correndo = $correndo;
     }

         
    function Estacionar(){
        $this->correndo = false;
    }
    function Dirigir(){
        $this->correndo = true;
        echo '<p>Estou dirigndo meu carro a mais de 200 por hora hahahaha</p>';
        echo" Ninguém me segura";
    }
    
    
    
    //put your code here
}
