<?php 
    /*Herança é um recurso que permite que classes compartilhem atributos e métodos e reaproveite códigos ou comportamentos generalizados */

    class Veiculo{
        public $modelo;
        public $cor;
        public $ano;

        public function andar(){
            echo 'Andei';
        }
        public function parar(){
            echo 'Parei';
        }
    }
    class Carros extends Veiculo{
        public function limparParabrisa(){
            echo 'Limpo';
        }
    }
    class Motos extends Veiculo{

        public function darGrau(){
            echo 'Dando grau';
        }
    }

    $carro = new Carros();
    $carro->modelo = 'Gol';
    $carro->cor = 'Azul';
    $carro->ano = '2010';
    var_dump($carro);
    echo '<br>';
    $moto = new Motos();
    $moto->modelo = 'Honda Nmax';
    $moto->cor = 'Branca';
    $moto->ano = '2018';
    var_dump($moto);
?>