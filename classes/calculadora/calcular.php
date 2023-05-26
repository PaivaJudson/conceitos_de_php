<?php
    
    require_once('Calculadora.php');

    $n1 = $_POST['numero1'];
    $n2 = $_POST['numero2'];
    $op = $_POST['operacao'];


    $calcular = new Calculadora();

    $calcular->setNumero1($n1);
    $calcular->setNumero2($n2);

    switch($op){
        case 'somar':
           echo $calcular->somar();
        break;

        case 'subtrair':
           echo $calcular->subtrair();
        break;

        case 'dividir':
           echo $calcular->dividir();
        break;
        case 'multiplicar':
           echo $calcular->multiplicar();
        break;
        default:

        break;
    }

?>