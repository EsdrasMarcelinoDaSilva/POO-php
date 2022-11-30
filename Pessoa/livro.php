<?php
    require_once "pessoa.php";
    require_once "interface.php";
    class Livro implements Publicacao{
        private $titulo;
        private $autor;
        private $totalPag;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function __construct($t, $at, $tp, $lt)
        {
            $this->titulo = $t;
            $this->autor = $at;
            $this->totalPag = $tp;
            $this->pagAtual = 0;
            $this->aberto = false;
            $this->leitor = $lt;
        }
        
        public function detalhes(){
            echo "<hr>Livro: " . $this->titulo . "<br>Escrito por: " . $this->autor;
            echo "<br>Páginas: " . $this->totalPag;
            echo "<br>Esta sendo Lido por: ". $this->leitor->getNome(); 
        }

        public function getTitulo(){
            return $this->titulo;
        }
        public function setTitulo($t){
            $this->titulo = $t;
        }
        public function getAutor(){
            return $this->autor;
        }
        public function setAutor($at){
            $this->autor = $at;
        }
        public function getTotalPag(){
            return $this->totalPag;
        }
        public function setTotalPag($tp){
            $this->totalPag = $tp;
        }
        public function getPagAtual(){
            return $this->pagAtual;
        }
        public function setPagAtual($pg){
            $this->pagAtual = $pg;
        }
        public function getAberto(){
            return $this->aberto;
        }
        public function setAberto($ab){
            $this->aberto = $ab;
        }
        public function getLeitor(){
            return $this->leitor;
        }
        public function setLeitor($lt){
            $this->leitor = $lt;
        } 
        
        public function abrir(){
            $this->aberto = true;
        }
        public function fechar(){
            $this->fechado = false;
        }
        public function folhear($pa){
            if($pa > $this->totalPag){
                $this->pagAtual = 0;
            }else{
                $this->pagAtual = $pa;
            }
        }
        public function avancarPag(){
            $this->pagAtual++;
        }
        public function voltarPag(){
            $this->pagAtual--;
        }
    }

?>