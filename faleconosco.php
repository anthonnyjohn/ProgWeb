<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            text-align: center; 
        }

        h1, h3 {
            color: #333; 
        }

        form {
            display: inline-block; 
            text-align: left; 
            margin: 0 auto; 
        }
    </style>
    <title>Fale Conosco</title>
</head>
<body>
    <h1>Fale Conosco!</h1>
    <h3>Entre em contato</h3>

    <form action="?pg=sucesso" method="post">
        <label>Nome:</label>
        <input type="text" name="nome"><br><br>
        <label>E-mail:</label>
        <input type="text" name="email"><br><br>
        <label>Assunto:</label>
        <select name="assunto">
            <option value="Duvida">Duvida</option>
            <option value="Reclamação">Reclamação</option>
        </select><br><br>
        <label>Mensagem</label><br><br>
        <textarea name="texto"></textarea><br><br>
        <input type="submit" value="Enviar"> 
    </form>
</body>
</html>
