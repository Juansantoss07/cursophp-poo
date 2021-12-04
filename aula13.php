<?php

//REFERÊNCIA E CLONAGEM

/*Referência é quando uma variável recebe o objeto que já foi instanciado. Nesse caso o valor que vai valer é somente o da última variável.

Veja o exemplo abaixo:
*/

class Pessoa {
    public $idade;

    public function __clone()
    {
        echo 'Clonagem de objetos ';
    }
    //Aqui temos o método mágico __clone, só inserimos ele caso queremos que ao usar o clone ao instaciar ele faça alguma coisa. Nesse caso ao estanciar usando clone temos a function que exibi na tela "clonagem de objetos".
}

$pessoa = new Pessoa();
$pessoa->idade = 25;
//Note que passamos o valor 25 para o atributo idade.

$pessoa2 = $pessoa;
$pessoa2->idade = 35;
//Note que a $pessoa2 recebe o objeto $pessoa, sendo assim o valor que foi passado por último será o único valor exibido, ou seja, se dermos o comando echo $pessoa->idade; esse comando mostrará somente o valor 35, que foi o último valor passado no atributo idade, e não o valor 25.


//Para conseguir exibir o valor 25 para $pessoa e 35 para $pessoa2, devemos clonar e não referenciar. Para isso basta somente substituir o comando New por clone. Veja o exemplo abaixo:

$pessoa2 = clone $pessoa;
$pessoa2->idade = 35;

echo $pessoa2->idade;


?>