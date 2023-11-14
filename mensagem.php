<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$anime = $_POST['anime'];

$sql = "INSERT INTO animes (nome,email,anime) VALUES ('{$nome}','{$email}','{$anime}')";

$res = $conn ->query($sql);

echo "Obrigado pela sugestão! $nome. atualizaremos assim que possivel!!!";
?>