<?php


interface Veiculo{

    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function mudarMarcha($marcha);

}


class Civic implements Veiculo{

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


$carro = new Civic();

echo $carro->acelerar(10);
echo $carro->freiar(5);
