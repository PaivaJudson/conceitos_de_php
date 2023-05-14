<?php

    require_once("funcoes_validar_login.php");

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $usuario_validado = validar_login($login, $senha);

    if($usuario_validado){
        echo "<h1>Acesso Concedido</h1>";
    }else{
        echo "<h1>Acesso Não Concedido</h1> $usuario_validado";
    }

?>