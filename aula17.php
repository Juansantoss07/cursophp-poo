<?php

//COMPOSIÇÃO
//Na composição, uma classe cria a instância de outra classe dentro de si própria, sendo assim, quando ela for destruída, a outra classe também será.

class Pessoa{

    public function atribuiNome($nome){
        return "O nome da pessoa é " .$nome;
    }
}

class Exibe {
    public $pessoa;
    public $nome;

    function __construct($nome)
    {
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }
    //Note que fizemos uma agregação aqui, porém ela foi dentro do escopo da classe, portanto isso é uma composição.

    public function exibeNome(){
        echo $this->pessoa->atribuiNome($this->nome);
    }
}

$exibe = new Exibe("Maria");
$exibe->exibeNome();
?>