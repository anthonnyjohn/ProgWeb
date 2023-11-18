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
$busca = "SELECT * FROM post ORDER BY id";
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
            <td><a href="alterar.php?id=<?= $sql['id']; ?>">Editar</a></td>
            <td><a href="javascript:confirmaExclusao('excluir.php?id=<?= $sql['id']; ?>')" class="ask">Excluir</a></td>
        </tr>
    <?php } ?>
</table>
