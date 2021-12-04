<?php 

//Exemplo criado por mim mesmo para testar meu aprendizado

    class Telefone{
        public $tela;
        public $som;
        public $chip;
        public $camera;

        public function ligar(){
            echo 'Ligado';
        }
        public function desligar(){
            echo  'Desligado';
        }
        public function tocar(){
            echo "Tocando";
        }
        public function tirarFoto(){
            echo "Foto tirada";
        }
    }

    $celular = new Telefone;
    $celular->tela = "AMOLED";
    $celular->som = "JBL";
    $celular->chip = "Claro";
    $celular->camera = "Lente da Sony";
    $celular->ligar();
    $celular->tocar();
    var_dump($celular);
?>