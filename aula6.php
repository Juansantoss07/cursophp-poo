<?php 

/*
Aqui vamos usar um exemplo de metódos/functions private ou protected. 
*/

class Veiculos{
    public $modelo;
    public $cor;
    public $ano;
    
    private function Andar(){
        echo  'Andei';
    }

    public function mostrarAcao(){
        $this->Andar();
    }
};
class Carro extends Veiculos{
    public function freiodeMao(){
        echo 'Freei';
    }
}

class Moto extends Veiculos{
    public function darGrau(){
        echo 'Dei grau pras novinha';
    }
}

$carro = new Veiculos;
$carro->modelo = 'Gol';
$carro->cor = 'Prata';
$carro->ano = '2010';
$carro->mostrarAcao();

var_dump($carro);


