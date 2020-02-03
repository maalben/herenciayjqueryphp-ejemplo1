<?php 

class Matematicas{

    private $numero1;
    private $numero2;

    public function __construct(){
        $this->numero1 = 0;
        $this->numero2 = 0;
    }

    public function setNumero1($valor){
        $this->numero1 = $valor;
    }

    protected function getNumero1(){
        return $this->numero1;
    }


    public function setNumero2($valor){
        $this->numero2 = $valor;
    }

    protected function getNumero2(){
        return $this->numero2;
    }
}

?>