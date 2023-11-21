<?php
include_once("../config.inc.php");

$nome = $_REQUEST['nome'];
$img = $_REQUEST['img'];
$url = $_REQUEST['url'];
$sino = $_REQUEST['sino'];

$sql = "INSERT INTO post2 (nome, img, url, sino)
        VALUES ('$nome', '$img', '$url', '$sino')";
$insert = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Manga</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
            text-align: center;
        }

        div {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        a {
            display: inline-block;
            margin-top: 10px;
            margin-right: 10px;
            padding: 8px 16px;
            text-decoration: none;
            color: #fff;
            background-color: #4caf50;
            border-radius: 4px;
        }

        a:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div>
        <?php
        if ($insert) {
            echo "<p>Manga adicionado com sucesso!</p>";
            echo '<a href="../index.php">Inicial</a>';
            echo '<a href="./listar2.php">Listar</a>';
        } else {
            echo "<p>Manga não adicionado!</p>";
        }
        ?>
    </div>
</body>

</html>