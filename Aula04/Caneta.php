<?php


 
class Caneta {
   private $modelo;
   private $ponta;
   private $cor;
   private $tampada;
  
   public function __construct($modelo,$cor,$ponta) {
       $this->setModelo($modelo);
       $this->setCor($cor);
       $this->setPonta($ponta);
       
   }
   public function getModelo() {
       return $this->modelo;
   }

   public function getPonta() {
       return $this->ponta;
   }

   public function getCor() {
       return $this->cor;
   }

   public function getTampada() {
       return $this->tampada;
   }

   public function setModelo($modelo): void {
       $this->modelo = $modelo;
   }

   public function setPonta($ponta): void {
       $this->ponta = $ponta;
   }

   public function setCor($cor): void {
       $this->cor = $cor;
   }

   public function setTampada($tampada): void {
       $this->tampada = $tampada;
   }


       
       
       
       

   
   
   
 
       
   
   
   
   
}

