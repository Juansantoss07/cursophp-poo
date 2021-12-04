<?php
 class Login{
     private $email;
     private $senha;
     private $nome;

     public function __construct($email, $senha, $nome)
     {
         $this->nome = $nome;
         $this->setEmail($email);
         $this->setSenha($senha);
     }

     public function getEmail(){
         return $this->email;
     }
     public function setEmail($e){
         $email = filter_var($e, FILTER_VALIDATE_EMAIL);
         return $this->email = $e;
     }
     public function getSenha(){
         return $this->senha;
     }
     public function setSenha($e){
         return $this->senha = $e;
     }
     public function getNome(){
         return $this->nome;
     }

     public function Logar(){
         if ($this->email == 'teste@teste.com' and $this->senha == '123456'):
            echo "Login efetuado com sucesso";
         else: 
            echo "Dados invalidos, tente novamente";
         endif;
     }

 }

    $logar = new Login("teste@teste.com", "123456", "Juan");
    $logar->Logar();
    echo '<br>';
    echo $logar->getNome();
?>