<?php

include_once("config.inc.php");

    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $texto = $_REQUEST['texto'];


    $sql = "INSERT INTO falecon (nome,email,texto)
            VALUES ('$nome','$email','$texto')";
    $insert = mysqli_query($conn,$sql);
  
?>