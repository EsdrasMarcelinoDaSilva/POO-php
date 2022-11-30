<?php

    interface Publicacao{
       
        public function abrir();
        public function fechar();
        public function folhear($pa);
        public function avancarPag();
        public function voltarPag();
    }

?>