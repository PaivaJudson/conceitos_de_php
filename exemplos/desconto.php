<?php

    require_once("funcoes_desconto.php");

    $valor_total = 800;
    $desconto = 10;
    $valor_total_com_desconto = calcula_desconto($valor_total, $desconto);


?>

<p>Valor Total: <?php echo $valor_total ?> </p>
<p>Valor Desconto: <?php echo $desconto ?>%</p>
<p>Valor Total Com Desconto: <?php echo $valor_total_com_desconto ?></p>