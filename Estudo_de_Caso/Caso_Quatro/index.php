<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<?php

$livros = fopen('books.csv', 'r');

$contador = 1;

echo '<table class="table table-striped table-hover">';

while ($linhas = fgets($livros)){
    
    echo "<tr>";
    $registo = explode(';', $linhas);

    if($contador == 1){
        echo "<thead>";
        foreach($registo as $campo){
            echo "<th scope='col'>". strtoupper($campo) . "</th>";
        }
        echo "</thead>";
    }
    else
    {
        foreach($registo as $campo){
            echo "<td>$campo</td>";
        }
    }
    echo "<tr>";
    $contador++;
}

echo "</table>";
