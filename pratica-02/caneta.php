<?php
    class Caneta{
        private $modelo;
        private $cor;
        private $ponta;
        private $tampada;

        /*[METODO CONSTRUCT]
        public function __Construct()
        {
           $this->cor = "Azul";
           $this->tampar();
        }*/

        public function __Construct($m, $c, $p){ //outro construtor
            $this->modelo = $m;
            $this->cor = $c;
            $this->ponta = $p;
            $this->tampar();
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function tampar(){
            $this->tampada = true;
        }

        public function setModelo($m){
            $this->modelo = $m;
        }

        public function getPonta(){
            return $this->ponta;
        }

        public function setPonta($p){
            $this->ponta = $p;
        }
    }
?>