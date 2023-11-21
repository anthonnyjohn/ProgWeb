<?php
include "../config.inc.php";

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $img = $_POST['img'];
        $url = $_POST['url'];
        $sino = $_POST['sino'];

        $sql = "UPDATE post2 SET nome='$nome', img='$img', url='$url', sino='$sino' WHERE id=$id";

        if (mysqli_query($conn, $sql)) {
            echo '<div style="background-color: #4caf50; color: #fff; padding: 10px; margin-bottom: 10px; border-radius: 5px;">';
            echo "Dados atualizados com sucesso!";
            echo '</div>';
            echo '<a href="../index.php?pg=manga" class="btn-estetico">Inicial</a> | <a href="./listar2.php" class="btn-estetico">Listar</a>';
        } else {
            echo "Erro ao atualizar os dados: " . mysqli_error($conn);
        }
    }

    $consulta = "SELECT * FROM post2 WHERE id = $id";
    $resultado = mysqli_query($conn, $consulta);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $dados = mysqli_fetch_array($resultado);
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Editar Registro</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f4f4f4;
                    margin: 20px;
                    text-align: center;
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
                    margin-right: 10px;
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

                .btn-estetico {
                    display: inline-block;
                    padding: 10px 20px;
                    font-size: 16px;
                    font-weight: bold;
                    text-align: center;
                    text-decoration: none;
                    background-color: #3498db;
                    color: #fff;
                    border-radius: 5px;
                    margin: 5px;
                    transition: background-color 0.3s;
                }

                .btn-estetico:hover {
                    background-color: #2980b9;
                }
            </style>
        </head>

        <body>
            <h2>Editar Registro</h2>
            <form action="" method="post">
                <label for="nome">Nome da Wiki:</label>
                <input type="text" id="nome" name="nome" value="<?= $dados['nome'] ?>"><br>

                <label for="img">Imagem da Wiki:</label>
                <input type="text" id="img" name="img" value="<?= $dados['img'] ?>"><br>

                <label for="url">URL da Wiki:</label>
                <input type="text" id="url" name="url" value="<?= $dados['url'] ?>"><br>

                <label for="sino">Sinopse da Wiki:</label>
                <input type="text" id="sino" name="sino" value="<?= $dados['sino'] ?>"><br>

                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" value="Salvar Alterações">
            </form>
        </body>

        </html>
<?php
    } else {
        echo "Registro não encontrado.";
    }
} else {
    echo "ID não fornecido para edição.";
}

mysqli_close($conn);
?>
