<?php include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
<h1>Estágios</h1>
<table style="border: 1px solid black;">
    <tr>
        <td>Id</td>
        <td>Aluno</td>
        <td>Empresa</td>
        <td>Estágio</td>
        <td>Ações</td>
    </tr>
    <?php foreach ($estagios as $estagio){?>
        <tr>
            <td><?php echo $estagio->getId()?></td>
            <td><?php echo $estagio->getAluno()->getNome()?></td>
            <td><?php echo $estagio->getEmpresa()->getNome()?></td>
            <td><?php echo $estagio->getStatus() ?></td>
            <td><a href="estagios?id=<?php echo $estagio->getId() ?>">Ver</a></td>
            <td><a href="/estagios?action=edit&id=<?php echo $estagio->getId() ?>">Editar</a></td>
            <td>
                <form action="estagios?id=<?php echo $estagio->getId() ?>" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
    <?php }?>
</table>
<?php include __DIR__ . "/../layout/footer.php" ?>