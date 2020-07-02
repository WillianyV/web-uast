<?php include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>

    <?php include __DIR__ . "/../layout/navCoordenacao.php" ?>

        <h1>Empresas</h1>

        <button onclick="location.href ='/empresas?action=create';" class="btn-novo">Nova Empresa</button>

        <table>
            <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Vagas</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
            </thead>
            <?php foreach ($empresas as $empresa){?>
                <tr>
                    <td><?php echo $empresa->getId()?></td>
                    <td><?php echo $empresa->getNomeEmpresa()?></td>
                    <td><?php echo $empresa->getVagas()?></td>
                    <td><?php echo $empresa->getTelefone()?></td>
                    <td>
                        <button onclick="location.href ='empresas?id=<?php echo $empresa->getId() ?>';" class="btn-ver">Ver</button>
                        <button onclick="location.href ='/empresas?action=edit&id=<?php echo $empresa->getId() ?>';" class="btn-editar">Editar</button>
                        <form action="empresas?id=<?php echo $empresa->getId() ?>" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            <?php }?>
        </table>
<?php include __DIR__ . "/../layout/footer.php" ?>