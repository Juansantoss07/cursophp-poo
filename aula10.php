<?php

//POLIMORFISMO

/*Polimorfismo é basicamente alterar/reescrever um método herdado de outra classe.

Veja o exemplo abaixo:
*/

class Animal{

    public function Andar(){
        echo 'O animal andou';
    }
}

class Cavalo{

    public function Andar(){
        echo 'O cavalo andou';
    }
    //Repare que reescrevemos a function, podemos reescrever a função fazendo qualquer outro método, isso é um polimorfismo.

}

$animal = new Cavalo();
$animal->Andar();
?>