<?php
    Class Pokemon{
        private $nombre;
        private $vida;

        public function __construct($nombrepasado){
            $this->vida=10;
            $this->nombre=$nombrepasado;
    }

        public function getvida(){
           return $this->vida;
        }

        public function herir($fuerza){
            $this->vida = $this->vida - $fuerza;
            echo "Ahora la vida de {$this->nombre} es de {$this->vida}<br>";
        }    
    }
?>