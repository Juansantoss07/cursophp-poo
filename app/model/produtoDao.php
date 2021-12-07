<?php

namespace app\model;

class ProdutoDao{

    public function create(Produto $p) {

        $sql = 'INSERT INTO produtos (nome, descricao) VALUES (?,?)';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDescricao());

        $stmt->execute();
    }

    public function read(){

    }

    public function update(Produto $p){

    }

    public function delete($id){
        
    }
}


?>