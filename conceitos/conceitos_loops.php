<?php

    $lista = array("Angola", "Brasil", "Portugal", "Mocambique", "Congo");

    for ($i=0; $i < 5; $i++){ 
        echo " $lista[$i]";
    }

    $noticia = array(
        array('titulo 1', 'conteudo da noticia 1'),
        array('titulo 2', 'conteudo da noticia 2'),
        array('titulo 3', 'conteudo da noticia 3')
    );

   print_r($noticia);

   print "<br /> <br />";

   foreach ($noticia as $value) {
        print $value[0]." ".$value[1];
        print "<br /> <br />";
   }

?>