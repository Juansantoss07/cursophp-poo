<?php 

//TRATAMENTO DE EXCEÇÕES

/*Ocorrência anormal que afecta o funcionamento da aplicação

Exception é a classe base para todas Exceptions

Message, code, file, line

Para lançar uma exceção no php use throw new Excecption()

*/

 class Newsletter{
     public function cadastrarEmail($email){

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new Exception("Este email é invalido", 10);
        else: 
            echo "Email cadastrado com sucesso!";
        endif;
     }
 }
 
 $newletter = new Newsletter();

 try{
     $newletter->cadastrarEmail("contato@.com");
 } catch(Exception $e){
     echo "Mensagem: " .$e->getMessage(). "<br>";
     echo "Código: " .$e->getCode(). "<br>";
     echo "Linha: " .$e->getLine(). "<br>";
     echo "Arquivo: " .$e->getFile(). "<br>";
 }
 
?>