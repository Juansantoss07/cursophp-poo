<?php

require_once 'vendor/autoload.php';

$produto = new \app\model\Produto();
$produto->setNome('Notebook DELL');
$produto->setDescricao('i5, 4Gb');

$produtoDao = new \app\model\ProdutoDao();
$produtoDao->read();
?>