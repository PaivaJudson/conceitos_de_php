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

            require_once("config.php");
            // session_unset($_SESSION['nome']);


            echo $_SESSION['nome'] . " <br />";
            echo session_id();
            var_dump($_SESSION);

        ?>



    </pre>


</body>
</html>