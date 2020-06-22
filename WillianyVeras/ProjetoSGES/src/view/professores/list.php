<?php include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
<h1>Professores</h1>
<table style="border: 1px solid black;">
    <tr>
        <td>Id</td>
        <td>Nome</td>
        <td>Vagas</td>
    </tr>
    <?php foreach ($professores as $professor){?>
        <tr>
            <td><?php echo $professor->getId()?></td>
            <td><?php echo $professor->getNome()?></td>
            <td><?php echo $professor->getVagasOrientados()?></td>
            <td><a href="professores?id=<?php echo $professor->getId() ?>">Ver</a></td>
            <td><a href="/professores?action=edit&id=<?php echo $professor->getId() ?>">Editar</a></td>
            <td>
                <form action="professores?id=<?php echo $professor->getId() ?>" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
    <?php }?>
</table>
<?php include __DIR__ . "/../layout/footer.php" ?>