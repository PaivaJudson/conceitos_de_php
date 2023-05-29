<?php

$n1 = 10;
$n2 = 20;

echo "n1 =  $n1 e n2 = $n2 <br />";

function trocarValores(&$a, &$b){
    $auxiliar = $a;
    $a = $b;
    $b = $auxiliar;
}

trocarValores($n1, $n2);
echo "n1 =  $n1 e n2 = $n2";


function somarValores(int ...$lista){
    return array_sum($lista);
}

function somar(int ...$lista): string{
    return array_sum($lista);
}

echo "<p>A soma dos valores  = ". somarValores(1, 2, 3, 4, 5, 7) ." </p>";
var_dump (somar(1, 2, 3, 4, 5, 7));


function resultado($mostrar){
    $mostrar();
}

resultado(function(){
    echo '<p>Termina</p>';
});