<?php 

    require_once 'Matematicas.php';

    class Resta extends Matematicas{

        public function restar(){
            return ($this->getNumero1() - $this->getNumero2());
        }
    }

?>