<?php

$file = fopen("texto.txt", 'r');

while(($linha = fgets($file, 4096)) != false){
    echo $linha . "<br />";
}

