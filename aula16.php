<?php

//AGREGAÇÃO

//Na agregação, uma classe precisa da outra para executar sua ação, ou seja, uma classe utiliza a outra como parte de si própria.

use classes\Produto;

class Produtos {
    public $name;
    public $valor;

    function __construct($nome, $valor){
        $this->name = $nome;
        $this->valor = $valor;
    }
}

class Carrinho {
    public $produtos;

    public function adiciona(Produtos $produto){
        //O parâmetro desse método é uma estancia da classe Produtos. Dessa forma fizemos uma agregação
        $this->produtos[] = $produto;
    }
    public function exibe(){
        foreach($this->produtos as $produto){
            echo $produto->name. "<br>";
            echo $produto->valor. "<hr>";
        }
    }
}

$produto1 = new Produtos("Notebook", "1.500");
$produto2 = new Produtos("Televisão", "3.400");
$produto3 = new Produtos("Playstation 5", "7.000");

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);
$carrinho->adiciona($produto3);

$carrinho->exibe();
