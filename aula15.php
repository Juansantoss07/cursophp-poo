<?php 

//ASSOCIAÇÃO
//Acontece quando um objeto "ultiliza" outro, porém, sem que eles dependam um do outro.


class Pedido{
    public $numero;
    public $cliente;
}

class Cliente{
    public $nome;
    public $endereço;
}

$cliente = new Cliente();
$cliente->nome = "Juan Santos";
$cliente->endereço = "Rua XX, n: 177";

$pedido = new Pedido();
$pedido->numero = "123";
$pedido->cliente = $cliente;
//NOTE QUE ASSOCIAMOS O OBJETO PEDIDO AO OUTRO OBJETO CLIENTE, ISSO É ASSOCIAÇÃO.

$dados = array(

    'numero' => $pedido->numero,
    'nome_cliente' => $pedido->cliente->nome,
    'endereco_cliente' => $pedido->cliente->endereço
);

//Note acima que criamos uma array, fazendo uma associação entre as duas classes, onde a váriavel nome_cliente recebe o objeto pedido, e esse objeto recebe o objeto cliente que está recebendo o nome. A mesma coisa é feita na váriavel endereco_cliente que está recebendo o endereço.

var_dump($dados);

?>