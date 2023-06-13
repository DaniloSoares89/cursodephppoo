<?php


require_once 'Lutador.php';
class Luta {
   //Atributos
   private $desafiante;
   private  $desafiado;
   private $rounds;
   private $aprovada;
   //Métodos Públicos
public function marcarLuta($l1,$l2){
    if($l1->getCategoria() == $l2->getCategoria() && $l1 != $l2 ){
      $this->aprovada = true;
      $this->desafiado = $l1;
      $this->desafiante = $l2;
      
    }
    else{
        $this->aprovada = false;
        $this->desafiado = null;
        $this->desafiante = null;
        
    }
   
}
public function lutar(){
    if($this->aprovada){
        $this->desafiado->apresentar();
        $this->desafiante->apresentar();
        $vencedor = rand(0,2);
        switch ($vencedor){
            case 0:
                
                $this->desafiado->empatarLuta();
                $this->desafiante->empatarLuta();
                echo "<br>A luta empatou!";
                //empate
                break;
            case 1:
                //desafiado vence
                echo"<p>" . $this->desafiado->getNome()." Venceu!</p>";
                $this->desafiado->ganharLuta();
                $this->desafiante->perderLuta();
                break;
            case 2:
                //desafiante vence
                echo '<p>'. $this->desafiante->getNome().' Venceu!</p>';
                $this->desafiante->ganharLuta();
                $this->desafiado->perderLuta();
                break;
        }
    }
    else{
        echo "<p>Luta não pode acontecer</p>";
    }
    
}
//Métods Especiais
    function getDesafiante() {
        return $this->desafiante;
    }

    function getDesafiado() {
        return $this->desafiado;
    }

    function getRouds() {
        return $this->rouds;
    }

    function getAprovada() {
        return $this->aprovada;
    }

    function setDesafiante($desafiante): void {
        $this->desafiante = $desafiante;
    }

    function setDesafiado($desafiado): void {
        $this->desafiado = $desafiado;
    }

    function setRouds($rouds): void {
        $this->rouds = $rouds;
    }

    function setAprovada($aprovada): void {
        $this->aprovada = $aprovada;
    }


}
