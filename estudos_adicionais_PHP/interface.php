<?php


interface Veiculo{

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function mudarMarcha($marcha);

}

abstract class Automovel implements Veiculo{

    public function acelerar($velocidade){
        return "Acelerou ". $velocidade . " ";
    }

    public function frenar($velocidade){
        return "frenou ". $velocidade . " ";
    }

    public function mudarMarcha($marcha){
        return "mudar marcha ". $marcha . " ";
    }
}

class Civic extends Automovel{

    public function empurrar(){
        return "Empurrar ... ";
    }

}



$carro = new Civic();


echo $carro->acelerar(10);
echo $carro->frenar(5);

