<?php

    function getInfo($atributo){
        $dados = array("titulo"=>"Site Modelo", "descricao"=>"Programando com PHP");
        return $dados[$atributo];
    }

    function getUsuarios(){
        return  [
            ["nome"=>"Judson Paiva", "email"=>"judsonpaiva16@gmail.com"],
            ["nome"=>"João André", "email"=>"joao.andre@gmail.com"],
            ["nome"=>"Helena André", "email"=>"joao.helena@gmail.com"]
        ];
    }

    function exibeUsuarios(){
        $usuarios = getUsuarios();
        $html = "";

        foreach($usuarios as $usuario){
            $html .= "<li class='list-group-item'>Nome: ". $usuario['nome'] . " Email: ". $usuario['email'];
        }
        return $html;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        <h2><?php echo getInfo("titulo"); ?> </h2>
        
        <p> <?php echo getInfo("descricao"); ?> </p>
        
        <ul class="list-group list-group-flush">
            <?php echo exibeUsuarios(); ?>
        </ul>
    </div>
</body>
</html>