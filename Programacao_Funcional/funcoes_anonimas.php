<?php

function($a, $b){
    return $a + $b;
};


$a = function($m, $k){
    return $m + $k;
};


//echo $a(20, 30);


(
    function($n1, $n2){
        echo $n1 + $n2;
    }
)(10, 12);




