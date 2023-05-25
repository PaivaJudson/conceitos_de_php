<?php

     class Pessoa{

        protected $nome;
        private $idade;


        public function __construct($nome, $idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }


        public function getNome(){
            return $this->nome;
        }
        
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getIdade(){
            return $this->idade;
        }
        
        public function seIdade($idade){
            $this->idade = $idade;
        }


    }

    class Funcionario extends Pessoa {
                
        private $cargo;
        private $salario;


        public function __construct($nome, $idade, $cargo, $salario){
            parent::__construct($nome, $idade);
            $this->cargo = $cargo;
            $this->salario = $salario;
        }

        public function getCargo(){
            return $this->cargo;
        }

        public function getSalario(){
            return $this->salario;
        }

        public function getNome(){
            return "Funcionária ". $this->nome;
        }

    }



?>