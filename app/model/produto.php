<?php

namespace app\model;

class Produto{

    private $id, $nome, $descricao;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getId(){
        return $this->descricao;
    }

    public function setId($id){
        $this->id = $id;
    }
}

?>
