<?php

//TRABALHANDO E APRENDENDO SOBRE CONSTANTES (CONST)

 class Pessoa {
     const nome = "Juan";

     public function exibirNome(){
         echo self::nome;
     }
 }

 class Juan extends Pessoa {
     const nome = "Santos";
 
    public function exibirNome(){
        echo parent::nome;
    }
}

/*Self terá prioridade maior que parent, ou seja... o nome exibido vai ser o que está na definição self e não o que está na definição parent  */

 $pessoa = new Pessoa;
 $pessoa->exibirNome();

?>