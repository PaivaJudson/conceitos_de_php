<?php

    $nome = (int)$_GET["identificador"];

    //var_dump($nome);

    $ip = $_SERVER["REMOTE_ADDR"];

    
    echo $ip . " <br />";

    $array1 = [1, 2, 3, 4];
    $array2 = [-3, 4, 5, 6];

    $resultado = $array1 + $array2;
    print_r($resultado);

    echo " <br />";

    $resultado = array_merge($array1, $array2);
    print_r($resultado);



    var_dump(strlen("Judson Paiva"));



?>