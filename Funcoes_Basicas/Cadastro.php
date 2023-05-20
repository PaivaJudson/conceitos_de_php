<?php

    if( empty($_POST['nome']) && isset( $_POST['nome']))
    {
        echo "vazia";
    }


?>



<form action="" method="post">

    <label for="">
        Nome Completo*: 
        <input type="text" name="nome">
    </label>

    <label for="">
        Número BI*: 
        <input type="text" name="BI">
    </label>

    <button>Cadastrar</button>

</form>






