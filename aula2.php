<?php
 class Login{
     private $email;
     private $senha;

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

     public function Logar(){
         if ($this->email == 'teste@teste.com' and $this->senha == '123456'):
            echo "Login efetuado com sucesso";
         else: 
            echo "Dados invalidos, tente novamente";
         endif;
     }

 }

    $logar = new Login();
    $logar->setEmail('teste@teste.com');
    $logar->setSenha('123456'); 
    $logar->Logar();
?>