<?php

//Listar apenas o conteudo dos animes

?>

<script language='javascript'>
function confirmaExclusao(aURL) {
    if(confirm('Você tem certeza que deseja excluir?')) {
        location.href = aURL;
    }
}
</script>

<?php include "../config.inc.php"; ?>
<?php
$busca = "SELECT * FROM post2 ORDER BY id";
$todos = mysqli_query($conn, $busca);
?>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    a {
        text-decoration: none;
        color: #3498db;
    }

    a:hover {
        color: #2980b9;
        font-weight: bold;
    }

    .ask {
        color: #e74c3c;
        cursor: pointer;
    }

    .btn-voltar {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        background-color: #3498db;
        color: #fff;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .btn-voltar:hover {
        background-color: #2980b9;
    }
</style>

<table>
    <tr>
        <th style="width: 25px;">Id</th>
        <th style="width: 205px;">Nome da página</th>
        <th style="width: 105px;">Alterar</th>
        <th style="width: 105px;">Excluir</th>
    </tr>
    <?php while ($sql = mysqli_fetch_array($todos)) { ?>
        <tr>
            <td><?= $sql['id']; ?></td>
            <td><?= $sql['nome']; ?></td>
            <td><a href="alterar2.php?id=<?= $sql['id']; ?>">Editar</a></td>
            <td><a href="javascript:confirmaExclusao('excluir2.php?id=<?= $sql['id']; ?>')" class="ask">Excluir</a></td>
        </tr>
    <?php } ?>
</table>
<br>
<a href="../index.php?pg=manga" class="btn-voltar mt-3">Voltar para a Página Inicial do Manga</a>
