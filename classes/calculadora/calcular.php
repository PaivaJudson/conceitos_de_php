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
            $calcular->somar();
        break;

        case 'subtrair':
            $calcular->subtrair();
        break;

        case 'dividir':
            $calcular->dividir();
        break;
        case 'multiplicar':
            $calcular->multiplicar();
        break;
        default:

        break;
    }

?>