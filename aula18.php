<?php

require_once 'vendor/autoload.php';

use Cocur\Slugify\Slugify;

$slugify = new Slugify();
$slugify->addRule('Teste', 'Experimentar'); //-> Isso é uma regra opcional, no caso ela vai trocar uma palavra pela outra...No nosso exemplo ela vai trocar a palavra Teste pela palavra Experimentar.
echo $slugify->slugify('Teste de link amigavel', '_');
//Você pode passar um segundo parâmetro especificando o que vai separar as palavras no link amigável, por default se você não passar esse parâmetro ele vai ficar com hífen(-), nesse caso nos vamos colocar um underline(_)


?>