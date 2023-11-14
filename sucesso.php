<?php

    include_once("faleconosco.bd.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $texto = $_POST['texto'];

    if($sql){
        echo "<p style='font-size: 40px; text-align: center;'>Mensagem enviada!</p>";    
    }else{
        echo "<p style='font-size: 40px; text-align: center;'>Mensagem não enviada!</p>";    
    }


?>