<?php

spl_autoload_register(function ($className) {
    $filename = $className . '.php';
    if (file_exists($filename)) {
        include($filename);
    }
});


$carro = new DelRey();


echo $carro->acelerar(10);
echo $carro->frenar(5);


