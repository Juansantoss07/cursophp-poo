<?php 

namespace app\model;

use PDO;

class Conexao {

    private static $instance; //-> Esse método vai verificar se já existe uma instância da conexão, se existir ele irá retornar a instância

    public static function getConn(){

        if(!isset(self::$instance)): //Nessa linha estamos usando o simbolo de negação (!) e em seguida o isset. Nesse caso podemos ler da seguinte forma: "Se não existir" e em seguida colocamos self:: por ser estático e o nome da váriavel. Ai fica: "Se não existir uma instância..."
            self::$instance = new \PDO('mysql:host=localhost; dbname=pdo; charset=utf8','root','');
            //Se não existir a instância então ele retorna uma nova. Nessa linha criamos uma conexão.
        else: 
            return self::$instance;
            //Se existir ele vai retornar a instância.
        endif;
    }

    
}