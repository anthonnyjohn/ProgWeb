<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Wiki</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h1 style="text-align: center;">Cadastro de Wiki</h1>

    <form action="inserirbd.php" method="post">
        <label for="nome">Nome da Wiki:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="img">Imagem da Wiki:</label>
        <input type="text" id="img" name="img" required>

        <label for="url">URL da Wiki:</label>
        <input type="text" id="url" name="url" required>

        <label for="sino">Sinopse da Wiki:</label>
        <input type="text" id="sino" name="sino" required>

        <input type="submit" value="Cadastrar">
    </form>

</body>
</html>
