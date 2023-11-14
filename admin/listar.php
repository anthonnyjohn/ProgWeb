<script language='javascript'>

function confirmaExclusao(aURL) {

    if(confirm('Você tem certeza que deseja excluir?')) {
    location.href = aURL;
    }
}

</script>
<?php include "../config.inc.php"; ?>
<?php

$busca = "Select * from post order by id";

$todos = mysqli_query($conn, $busca);

?>
<table>
    <tr>
        <td style="width: 25px;">Id</td>
        <td style="width: 205px;">Nome da página</td>
        <td style="width: 105px;">Alterar</td>
        <td style="width: 105px;">Excluir</td>
    </tr>
    <?php while ($dados=mysqli_fetch_array($todos)) {?>
    
    <tr>
        <td><?=$dados['id'];?></td>
        <td><?=$dados['nome'];?></td>
        <td><a href="?pg=alterar&id=<?=$dados['id']; ?>">!!</a></td>
        <td><a href="javascript:confirmaExclusao('excluir.php?&id=<?=$dados['id']; ?>')" class="ask">
XX</a></td>
    </tr>
    
    <?php } ?>


</table>
