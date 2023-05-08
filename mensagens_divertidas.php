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
			print "<br /> <br />";
			var_dump($mensagens);

			$lista_ojectos = array(
				'a' => 'Judson',
				'b' => true,
				 1  => "Judson Paiva",
			);

			print "<br /> <br />";
			print "<br /> <br />";
			var_dump($lista_ojectos);

			print "<br /> <br />";
			print "<br /> <br />";

			$tabela[8]['a'] = 'Torre Preta';
			$tabela[8]['b'] = 'Bispo';
			$tabela[8]['c'] = 'Cavalo Preto';
			$tabela[8]['d'] = 'Rainha Preta';
			$tabela[8]['e'] = 'Rei Preta';
			$tabela[8]['f'] = 'Bispo Preto';
			$tabela[8]['g'] = 'Cavalo Preto';
			$tabela[8]['h'] = 'Torre Preta';

			$tabela[7]['a'] = 'Peão Preto';
			$tabela[7]['b'] = 'Peão Preto';
			$tabela[7]['c'] = 'Peão Preto';
			$tabela[7]['d'] = 'Peão Preto';
			$tabela[7]['e'] = 'Peão Preto';
			$tabela[7]['f'] = 'Peão Preto';
			$tabela[7]['g'] = 'Peão Preto';
			$tabela[7]['h'] = 'Peão Preto';

		
			$tabela[1]['a'] = 'Torre Preta';
			$tabela[1]['b'] = 'Bispo';
			$tabela[1]['c'] = 'Cavalo Preto';
			$tabela[1]['d'] = 'Rainha Preta';
			$tabela[1]['e'] = 'Rei Preta';
			$tabela[1]['f'] = 'Bispo Preto';
			$tabela[1]['g'] = 'Cavalo Preto';
			$tabela[1]['h'] = 'Torre Preta';

			$tabela[2]['a'] = 'Peão Preto';
			$tabela[2]['b'] = 'Peão Preto';
			$tabela[2]['c'] = 'Peão Preto';
			$tabela[2]['d'] = 'Peão Preto';
			$tabela[2]['e'] = 'Peão Preto';
			$tabela[2]['f'] = 'Peão Preto';
			$tabela[2]['g'] = 'Peão Preto';
			$tabela[2]['h'] = 'Peão Preto';

			print_r($tabela);
			print "<br /> <br />";
			print "<br /> <br />";


			$alunos = array(
				array("Joao", 10, "Angolano"),
				array("Maria", 20, "Português"),
				array("Armindo", 18, "Brasileiro")
			);

			print_r($alunos);

		?>
		

	</body>
</html>