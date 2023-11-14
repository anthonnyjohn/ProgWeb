<?php

include_once("../config.inc.php");

    $nome = $_REQUEST['nome'];
    $img = $_REQUEST['img'];
    $url = $_REQUEST['url'];
    $sino = $_REQUEST['sino'];

    

    $sql = "INSERT INTO post (nome,img,url,sino)
            VALUES ('$nome','$img','$url','$sino')";
    $insert = mysqli_query($conn,$sql);
  
    if($sql){
        echo "Anime adicionado!";
    }else{
        echo "Anime não adicionado!";
    }
?>