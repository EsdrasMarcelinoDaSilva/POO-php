<?php

    class ContaBanco {
        // Atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;
        
        // Metodos
        public function abrirConta($t){
            $this->setTipo($t);
            $this->setStatus(true);
            if($t == 'CC'){
                $this->setSaldo(50);
            }elseif($t == 'CP'){
                $this->setSaldo(150);
            }
        }
        public function fecharConta(){
            if($this->getSaldo() > 0){
                echo "<p>Conta com Dinheiro não pode ser fechada!</p>";
            }
            elseif($this->getSaldo() < 0){
                echo "<p>Conta em Debito não pode ser fechada!</p>";
            } else{
                $this->setStatus(false);
                echo "<p>Conta de". $this->getDono(). " fechada com Sucesso" . "</p>";
            }
        }
        public function depositar($v){
            if($this->getStatus() == true){
                $this->setSaldo($this->getSaldo() + $v);
                echo "<p>Deposito de R$ $v na Conta de ". $this->getDono()."</p>";
            }else{
                echo "<p>Conta fechada, Impossivel Depositar!</p>";
            }
        }
        public function sacar($v){
            if($this->getStatus() == true){
                if($this->getSaldo() >= $v){
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Saque de $v Autorizado na Conta de ".$this->getDono()."</p>";     
                }else{
                    echo "Saldo Insuficiente!";
                }
            }else{
                echo "Impossivel Sacar!";
            }
        }
        public function pagarMensal(){
            if($this->getTipo() == 'CC'){
                $valor = 12;
            }elseif($this->getTipo() == 'CP'){
                $valor = 20;
            }
            if($this->getStatus() == true){
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Mensalidade de R$ $valor debitada na Conta de ". $this->getDono()."</p>";
            }else{
                echo "Impossivel Pagar, Saldo Insuficiente!";
            }
        }
        // Métodos Especiais
        public function __construct()
        {
           $this->setSaldo(0);
           $this->setStatus(false); 
           echo "<p>Conta Criadacom Sucesso!</p>";
        }
        public function setnumConta($nC){
            $this->numConta = $nC;
        }
        public function getnumConta(){
            return $this->numConta;
        }
        public function setTipo($t){
            $this->tipo = $t;
        }
        public function getTipo(){
            return $this->tipo;
        }
        public function setDono($d){
            $this->dono = $d;
        }
        public function getDono(){
            return $this->dono;
        }
        public function setSaldo($s){
            $this->saldo = $s;
        }
        public function getSaldo(){
            return $this->saldo;
        }
        public function setStatus($st){
            $this->status = $st;
        }
        public function getStatus(){
            return $this->status;
        }
    }

?>