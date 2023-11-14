<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            text-align: center;
        }

        h1 {
            color: #333; 
        }

        form {
            display: inline-block; 
            text-align: left; 
        }
    </style>
    <title>Centralizar Conteúdo</title>
</head>
<body>
    <h1>Aqui você sugere!!!</h1>

    <form action="?pg=mensagem" method="post">
        <label>Nome:</label>
        <input type="text" name="nome"><br><br>
        <label>E-mail:</label>
        <input type="text" name="email"><br><br>
        <label>Anime:</label>
        <input type="text" name="anime"><br><br>
        <input type="submit" value="Enviar"> 
    </form>
</body>
</html>
