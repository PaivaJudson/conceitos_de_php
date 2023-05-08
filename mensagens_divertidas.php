<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens divertidas</title>
	</head>

	<body>
		<h1>Testando</h1>
		<?php
			// echo "Olá mundo!";
			// print '<p>Teste de impressao com Print</p>';

			// $nome = "Judson Paiva";
			// $idade = 1000;
			// $preco_do_pc = 500000;
			// $vender_pc = false;

			// $concatenar_valor = 400;
			// print "$nome tem $idade anos de idade, comprou o PC por $preco_do_pc. Vende? $vender_pc? ".$concatenar_valor;

			// $lista_de_alunos = array(0=>"Judson Paiva", 1=>"Quissanga Paiva", 2=> "Leonor José");
			// echo $lista_de_alunos[0];
			// echo $lista_de_alunos[1];

			$mensagens = array(
    			"A simplicidade é a maior sofisticação. - Leonardo da Vinci",
    			"Não importa quão devagar você vá, desde que você não pare. - Confúcio",
    			"Não existe um caminho para a felicidade. A felicidade é o caminho. - Buda",
    			"O sucesso é ir de fracasso em fracasso sem perder entusiasmo. - Winston Churchill",
    			"A educação é a arma mais poderosa que você pode usar para mudar o mundo. - Nelson Mandela");
			
			print_r($mensagens);
			var_dump($mensagens);
		?>
		

	</body>
</html>