<?php include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
<h1>Empresas</h1>
<table style="border: 1px solid black;">
    <tr>
        <td>Id</td>
        <td>Nome</td>
        <td>Vagas</td>
        <td>Telefone</td>
        <td>Ações</td>
    </tr>
    <?php foreach ($empresas as $empresa){?>
        <tr>
            <td><?php echo $empresa->getId()?></td>
            <td><?php echo $empresa->getNomeEmpresa()?></td>
            <td><?php echo $empresa->getVagas()?></td>
            <td><?php echo $empresa->getTelefone()?></td>
            <td><a href="empresas?id=<?php echo $empresa->getId() ?>">Ver</a></td>
            <td><a href="/empresas?action=edit&id=<?php echo $empresa->getId() ?>">Editar</a></td>
            <td>
                <form action="empresas?id=<?php echo $empresa->getId() ?>" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
    <?php }?>
</table>
<?php include __DIR__ . "/../layout/footer.php" ?>