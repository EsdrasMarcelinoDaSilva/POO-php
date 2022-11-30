<?php
    require_once "classe.php";
    class Luta{
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;
        
        public function getDesafiado(){
            return $this->desafiado;
        }
        public function setDesafiado($dd){
            $this->desafiado = $dd;
        }
        public function getDesafiante(){
            return $this->desafiante;
        }
        public function setDesafiante($df){
            $this->desafiante = $df;
        }
        public function getRounds(){
            return $this->rounds;
        }
        public function setRounds($r){
            $this->rounds = $r;
        }
        public function getAprovada(){
            return $this->aprovada;
        }
        public function setAprovada($ap){
            $this->aprovada = $ap;
        }
        
        public function marcarLuta($L1, $L2){
            if($L1->getCategoria() === $L2->getCategoria() && $L1 != $L2){
                $this->aprovada = true;
                $this->desafiado = $L1;
                $this->desafiante = $L2;
            }else{
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
                switch($vencedor){
                    case 0:
                        echo "<p>Empatou!</p>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        break;
                    case 1:
                        echo "<p>". $this->desafiado->getNome(). " Venceu!!!</p>";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;
                    case 2:
                        echo "<p>". $this->desafiante->getNome(). " Venceu!!!</p>";
                        $this->desafiante->ganharLuta();
                        $this->desafiado->perderLuta();
                        break;       
                }
            }else{
                echo "<p><strong>Luta não pode Acontecer!</strong></p>";
            }
        }
    
    
    }


?>