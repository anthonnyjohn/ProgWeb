<?php
    
    
    $conn = mysqli_connect("127.0.0.1","root","");

    $db = mysqli_select_db($conn,"anime");

    /*
    if($conn){
        echo "Conexão estabelecida com sucesso!";
    }else{
        echo "Erro na conexão com banco de dados.";
    }
    */
?>