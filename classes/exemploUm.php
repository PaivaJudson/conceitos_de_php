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
           
           include_once('exemplosClasses.php');


            $p = new Pessoa("Judson Paiva", 10);
            //$p->setNome('Judson Paiva');

            echo $p->getNome();


        ?>

    </pre>
</body>
</html>