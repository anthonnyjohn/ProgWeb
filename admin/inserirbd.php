<?php

include_once("../config.inc.php");

    $titulo = $_REQUEST['titulo'];
    $texto = $_REQUEST['texto'];

    $sql = "INSERT INTO site (titulo,texto)
            VALUES ('$titulo','$texto')";
    $insert = mysqli_query($conn,$sql);
  
?>