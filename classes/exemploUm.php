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


            $p = new Pessoa("Judson Quissanga", 10);
            $p->setNome($p->getNome(). ' Paiva');

            $f = new Funcionario("Leonor Paiva", 9, "Administradora", 1000000.0);


            echo $p->getNome() . " <br />";
            echo $f->getNome() . " <br />";
            echo $f->getIdade() . " <br />";
            echo $f->getCargo() . " <br />";

        ?>

    </pre>
</body>
</html>