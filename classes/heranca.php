<?php

    class Felino{
        public $mamifero = 'sim';


        public function correr(){
            echo 'correr como felino';
        }

    }


    class Chita extends Felino{
        public function correr(){

            echo 'correr como Chita';
        }

    }

    $chita = new Chita();

    $chita->correr();




?>