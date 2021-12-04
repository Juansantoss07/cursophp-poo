<?php
    class Pessoa{
        public $nome;
        public $idade;

        public function falar(){
            echo $this->nome. ' tem '.$this->idade. ' anos';
        }
    };

    $Juan = new Pessoa();
    $Juan->nome = 'Juan Cunha dos Santos';
    $Juan->idade = 21;
    $Juan->falar();
?>