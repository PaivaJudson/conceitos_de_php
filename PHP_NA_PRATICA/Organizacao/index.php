<?php
    include('Api/api.php');
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

