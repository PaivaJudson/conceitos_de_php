<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <pre>
        <?php
            $n[0] = 10;
            $n[1] = 11;
            $n[2] = 110;

            var_dump($n);
            print_r($n);

            $m = array(3, 5, 8, 2);
            
            print_r($m);

            $lista = array("nome" => "Judson Paiva",
                           "idade"=> 29,
                           "sexo" => "M"
                        );
            print_r($lista);

            foreach($lista as $key => $valor){
                echo $key . " possui ". $valor . " <br />";
            }
        ?>
    </pre>

</body>
</html>