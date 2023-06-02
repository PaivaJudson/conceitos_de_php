<?php

$file = fopen("texto.txt", 'r');

while(($linha = fgets($file, 4096)) != false){
    //echo $linha . "<br />";
}

// existem outras funcoes como file_get_contents

$arquivo = file('texto.txt');

foreach($arquivo as $linha){
    echo $linha . " <br />";
}