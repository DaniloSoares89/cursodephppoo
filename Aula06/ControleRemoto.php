<?php
require_once 'Controlador.php';

class ControleRemoto implements Controlador {
   private $volume;
   private $ligado;
   private $tocando;
   public function __construct() {
       $this->volume = 50;
       $this->ligado = false;
       $this->tocando = false;
       
       
   }
   private function getVolume() {
       return $this->volume;
   }

   private function getLigado() {
       return $this->ligado;
   }

  private function getTocando() {
       return $this->tocando;
   }

   private function setVolume($volume): void {
       $this->volume = $volume;
   }

   private function setLigado($ligado): void {
       $this->ligado = $ligado;
   }

   private function setTocando($tocando): void {
       $this->tocando = $tocando;
   }
   public function ligar(){
        $this->setLigado(true);
        
    }
   public function desligar()
    {
        
     $this->setLigado(false) ;  
    }
     public function play(){
       if($this->getLigado() && !($this->getTocando())){
           $this->setTocando(true);
           
       }
       
   }
    public function abrirMenu(){
       echo"----- MENU------";
        echo"</br>Está Ligado? ".($this->getLigado()?" SIM":"NÃO ");
        echo"</br>Está Tocando? ".($this->getTocando()?" SIM":"NÃO ");
        echo"</br>Volume: ".$this->getVolume();
        for($i = 1; $i <= $this->getVolume();$i+=10){
            echo"|";
        }
        echo"</br>";
        
    }
   public function fecharMenu(){
       echo"</br>Fechando Menu...";
       
   }
   public function maisVolume(){
       if($this->getLigado()){
           $this->setVolume($this->getVolume() + 10);
       }
       else{
           echo"<p>ERRO! Não Posso aumentar o volume</P>";
       }
       
   }
   public function menosVolume(){
       if($this->getLigado()){
           $this->setVolume($this->getvolume() - 10);
       }
       else{
           echo'<p>ERRO! não posso diminuir o volume</p>';
       }
       
   }
   public function ligarMudo(){
       if($this->getLigado() && $this->getVolume() > 0){
          
           $this->setVolume(0);
       }
           
       
       
   }
   public function desligarMudo(){
       if($this->getLigado() && $this->getVolume() == 0){
           $this->setVolume($this->getVolume() + 5);
       }
       
   }
  
   public function pause(){
       if($this->getLigado() && $this->getTocando()){
           $this->setTocando(false);
       }
   }



}
