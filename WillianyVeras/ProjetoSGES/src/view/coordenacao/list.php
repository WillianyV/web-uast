<?php include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
<h1>Coordenação</h1>
<table style="border: 1px solid black;">
    <tr>
        <td>Id</td>
        <td>Nome</td>
        <td>Código do Servidor</td>
        <td>Ações</td>
    </tr>
    <?php foreach ($coordenacao as $coordenador){?>
        <tr>
            <td><?php echo $coordenador->getId()?></td>
            <td><?php echo $coordenador->getNome()?></td>
            <td><?php echo $coordenador->getCodigoServidor()?></td>
            <td><a href="coordenacao?id=<?php echo $coordenador->getId() ?>">Ver</a></td>
            <td><a href="/coordenacao?action=edit&id=<?php echo $coordenador->getId() ?>">Editar</a></td>
            <td>
                <form action="coordenacao?id=<?php echo $coordenador->getId() ?>" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
    <?php }?>
</table>
<?php include __DIR__ . "/../layout/footer.php" ?>