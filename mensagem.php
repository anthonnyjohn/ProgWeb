<?php

include_once("config.inc.php");

    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $anime = $_REQUEST['anime'];


    $sql = "INSERT INTO animes (nome,email,anime)
            VALUES ('$nome','$email','$anime')";
    $insert = mysqli_query($conn,$sql);
  
   
    if($sql){
        echo "<p style='font-size: 40px; text-align: center;'>Mensagem enviada!</p>";    
    }else{
        echo "<p style='font-size: 40px; text-align: center;'>Mensagem não enviada!</p>";    
    }

?>