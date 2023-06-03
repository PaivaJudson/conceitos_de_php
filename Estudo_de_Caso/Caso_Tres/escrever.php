<?php

$fileRead = fopen('ficheiro.txt', 'r');

$fileRecord = fopen('f.txt', 'w');

while(($linha = fgets($fileRead, 4096)) != false){

    $str = explode(' ', $linha);
    $first_words = $str[0];

    fwrite($fileRecord, $first_words);
}


fclose($fileRecord);
fclose($fileRead);
