<?php
include "../config.inc.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $excluir = "DELETE FROM post WHERE id = $id";
    $resultado = mysqli_query($conn, $excluir);

    if ($resultado) {
        $mensagem = "Registro excluído com sucesso!";
        $corMensagem = "#4caf50";
    } else {
        $mensagem = "Erro ao excluir o registro: " . mysqli_error($conn);
        $corMensagem = "#f44336";
    }
} else {
    $mensagem = "ID não fornecido para exclusão.";
    $corMensagem = "#f44336";
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Registro</title>
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
            background-color: <?php echo $corMensagem; ?>;
            color: #fff;
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
        <p><?php echo $mensagem; ?></p>
        <a href="../index.php">Inicial</a>
        <a href="./listar.php">Listar</a>
    </div>
</body>

</html>
