<?php 
//MÉTODOS E ATRIBUTOS ESTÁTICOS.

/*Para criar um atributo ou método estático é só colocar static ao lado de public/private ou protected. 

Com o método e/ou atributo static (estático) não precisamos estanciar uma classe. Ao invés disso só chamamos o nome da Class seguido de dois pontos, dois pontos (::) e em seguida passamos o método ou atributo.

Veja o exemplo abaixo:
*/

class Login{
    
    public static $user;

    public static function verificaLogin(){
        echo "O usuário ".self::$user." está logado!";
    }
}

/*Repare que não usamos $this->. O motivo é que nesse caso ele não funciona. Sempre que usarmos o Static devemos usar o Self:: seguido da váriavel, como mostra acima. */

Login::$user = "Juan";
Login::verificaLogin();

?>