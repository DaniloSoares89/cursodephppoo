<?php


class Caneta {
    var $cor;
    var $carga;
    var $modelo;
    var $ponta;
    var $tampada;
    
   
    
    public function getCor() {
return $this->cor;
}

public function getCarga() {
return $this->carga;
}

public function getModelo() {
return $this->modelo;
}

public function getPonta() {
return $this->ponta;
}

public function getTampada() {
return $this->tampada;
}

public function setCor($cor): void {
    $this->cor = $cor;
}

public function setCarga($carga): void {
    $this->carga = $carga;
}

public function setModelo($modelo): void {
    $this->modelo = $modelo;
}

public function setPonta($ponta): void {
    $this->ponta = $ponta;
}

public function setTampada($tampada): void {
    $this->tampada = $tampada;
}
 function Rabiscar(){
       if($this->tampada == true){
           echo'ERRO!Não Posso rabiscar';
       }
        else{
            echo'Estou rabiscando';
        }
    }
    Function Tampar(){
        $this->tampada = true;
        
    }
    function Destampar(){
        $this->tampada = false;
        
    }


}


