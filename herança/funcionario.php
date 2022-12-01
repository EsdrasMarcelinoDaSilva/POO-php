<?php
require_once "pessoa.php";
    class Funcionario extends Pessoa{
        private $setor;
        private $trabalhando;

        public function mudarTrabalho(){

        }

        public function getSetor(){
            return $this->setor;
        }
        public function setSetor($st){
            $this->setor = $st;
        }
        public function getTrabalhando(){
            return $this->trabalhando;
        }
        public function setTrabalhando($tr){
            $this->trabalhando = $tr;
        }
    }
?>