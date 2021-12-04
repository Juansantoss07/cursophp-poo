<?php

//NAMESPACES

/*
Usamos o namespaces para não existir conflito quando existem dois arquivos com o mesmo nome, mas em pastas diferentes. 
No caso, temos um arquivo "produto.php" na pasta classes e temos um outro arquivo diferente mas que possui o mesmo nome dentro da pasta models.

Dentro de cada um desses arquivos definimos um namespace diferente, um para cada um, sendo o nome de sua preferência, mas o recomendado é definir com o mesmo nome da pasta.

Nesse caso, ao estanciar uma classe, devemos colocar uma barra invertida (\) após o new e em seguida novamente uma barra invertida seguida do nome da classe.

Veja o exemplo abaixo:

*/

require 'classes/produto.php';
require 'models/produto.php';

$produto = new \models\Produto();
$produto->mostrarDetalhes();

/*
Podemos simplificar um pouco mais usando "use" seguido do nome da pasta, barra invertida e o nome da classe.

Veja abaixo como ficaria:
*/

use classes\Produto;
$produto = new Produto();
$produto->mostrarDetalhes();

/*
Outra maneira também é dar apelidos as nossas classes e chama-las por esse apelido.

Veja como: 
*/

use \models\Produto as apelido;
$produto = new apelido();
$produto->mostrarDetalhes();

?>