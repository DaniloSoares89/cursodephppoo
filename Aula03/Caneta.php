<?php


class Caneta {
    public $cor;
    protected $carga;
    public $modelo;
    private $ponta;
    protected $tampada;
   
    public function __construct() {
        $this->modelo = "Bic Cristal";
        $this->ponta = 10;
        $this->cor = "Verde";
       
      
        $this->Tampar();
    }

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

      public  function Rabiscar(){
       if($this->tampada == true){
           echo'ERRO!Não Posso rabiscar';
       }
        else{
            echo'Estou rabiscando';
        }
    }
   public Function Tampar(){
        $this->tampada = true;
        
    }
   public function Destampar(){
        $this->tampada = false;
        echo"Estou rabiscando....";
        
    }
    //put your code here
}

