<?php
    class Pessoa{
        private $nome;
        private $idade;
        private $sexo;

        public function fazerAniversario(){

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

    }
?>