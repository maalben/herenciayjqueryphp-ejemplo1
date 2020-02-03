<?php 

    require_once 'Matematicas.php';

    class Sumar extends Matematicas{

        public function sumar(){
            return ($this->getNumero1() + $this->getNumero2());
        }
    }

?>