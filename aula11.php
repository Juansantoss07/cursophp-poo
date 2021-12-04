<?php

//INTERFACES

/*
Interfaces são modelos que criamos com métodos e atributos para fazer classes seguindo aquele mesmo modelo. 
Existem alguns pontos especificos ao criarmos outras classes usando o modelo que criamos com interface. 
Esses pontos são: 

I. Diferente da classe que herdarmos usando extend e seguido do nome da classe, devemos substituir por implements seguido do nome da Interface (interface).

II. Ao criarmos a classe que vamos usar o implements, somos obrigados a usar todos os atributos e métodos que existem em nossa interface.

Veja o exemplo abaixo:
*/

    interface Crud{
        public function create ($data);
        public function read();
        public function update();
        public function delete();
    }

    class Noticias implements Crud {
        public function create($data){
            //Aqui colocamos a lógica para criar noticia.
            //Note também que tivemos que colocar o mesmo parâmetro, caso não fosse inserido esse parâmetro, daria erro.
        }
        public function read(){
            //lógica para ler uma notícia.
        }
        public function update(){
            ///lógica para atualizar uma notícia.
        }
        public function delete(){
            //lógica para deletar uma notícia.
        }
    }

?>