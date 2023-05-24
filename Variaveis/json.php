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

            define("SERVIDOR", "127.0.0.1");
            define("BANCO_DE_DADOS", [
                '127.0.0.1',
                'root',
                'password',
                'test'
            ]);

            $pessoas = array();

            array_push($pessoas, array(
                'nome' => 'Judson Paiva',
                'idade' => 10
            ));

            array_push($pessoas, array(
                'nome' => 'Leonor Paiva',
                'idade' => 9
            ));

            echo json_encode($pessoas). " <br />";
            echo SERVIDOR. " <br />";;

            print_r(BANCO_DE_DADOS);
        ?>

    </pre>
</body>
</html>