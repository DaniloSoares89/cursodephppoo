<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Lutador
 *
 * @author danil_mer97td
 */
class Lutador {
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade ,$altura,$peso;
    private $categoria, $vitorias,$derrotas,$empates;
    //métodos
    public function apresentar(){
        echo "<p>--------------------------------------</p>";
        echo "CHEGOU A HORA! O lutador ".$this->getNome();
        echo" Veio diretamente de ".$this->getNacionalidade();
        echo" tem " .$this->getIdade()." Anos e pesa ".$this->getPeso()."kg ";
        echo'</br>ele tem '.$this->getVitorias()." Vitórias, ";
        echo $this->getDerrotas()." Derrotas e ".$this->getEmpates() ." Empates";
        
        
    }
    public function status(){
      echo'<p>----------------------</p>';
      echo'<p>'. $this->getNome() . " é um peso " . $this->getCategoria();
      echo'ganhou '. $this->getVitorias() . ' vezes';
      echo' empatou ' . $this->getEmpates() . ' vezes e perdeu ' . $this->getDerrotas()." Vezes";
       
        
    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
        
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
        
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
        
    }
    //Métodos Especias
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }
    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setNacionalidade($nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setAltura($altura): void {
        $this->altura = $altura;
    }

    public function setPeso($peso): void {
        $this->peso = $peso;
        $this->setCategoria();
    }

     function setCategoria(): void {
        if($this->peso < 52.2){
            $this->categoria = " Inválido ";
        }
        elseif($this->peso <= 70.3){
            $this->categoria = " Leve ";
        }
        elseif($this->peso <= 83.9){
            
            $this->categoria = " Médio ";
        }
        elseif($this->peso <= 120.2){
            $this->categoria = " Pesado ";
        }
        else{
            $this->categoria = " Inválido ";
            
        }
    }

    public function setVitorias($vitorias): void {
        $this->vitorias = $vitorias;
    }

    public function setDerrotas($derrotas): void {
        $this->derrotas = $derrotas;
    }

    public function setEmpates($empates): void {
        $this->empates = $empates;
    }



}
