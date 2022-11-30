<?php
  class Pessoa{
    private $nome;
    private $idade;
    private $sexo;

    public function __construct($n, $id, $sx)
    {
        $this->nome = $n;
        $this->idade = $id;
        $this->sexo = $sx;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($id){
        $this->idade = $id;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function setSexo($sx){
        $this->sexo = $sx;
    }
    
    
    public function fazerAniversario(){
        $atual = date('Y');
        $nasc = 1984;
        $anv = $atual - $nasc;
        echo "<br>A idade do leitor(a) é: $anv anos";
    }
  }
?>