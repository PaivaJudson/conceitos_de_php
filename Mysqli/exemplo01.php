<?php

$nome_servidor = "localhost";
$usuario_bd = "root";
$senha = "";
$nome_do_banco = "bd_learning_web";


$conexao = new mysqli($nome_servidor, $usuario_bd, $senha, $nome_do_banco);

if($conexao->connect_error){
    echo "Error: " . $conexao->connect_error;
}


$login = "judsonpaiva16@gmail.com";
$password = "12345";


$iserir = "INSERT INTO tabela (login, password) VALUES (?, ?)";
$querySql = $conexao->prepare($iserir);
$querySql->bind_param("ss", login, password);
$querySql->execute();