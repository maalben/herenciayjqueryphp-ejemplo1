<?php 

    require_once 'Sumar.php';
    require_once 'Resta.php';

    sleep(2);

    $objSuma = new Sumar();
    $objResta = new Resta();

    $numero1 = $_POST["txtnumero1"];
    $numero2 = $_POST["txtnumero2"];

    if(isset($_POST["btnsumar"])){
        $objSuma->setNumero1($numero1);
        $objSuma->setNumero2($numero2);
        echo $objSuma->sumar();
    }

    if(isset($_POST["btnrestar"])){
        $objResta->setNumero1($numero1);
        $objResta->setNumero2($numero2);
        echo $objResta->restar();
    }

?>