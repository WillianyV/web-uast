<?php include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>

    <?php include __DIR__ . "/../layout/navCoordenacao.php" ?>

    <button onclick="location.href ='/estagios?action=create';" class="btn-novo">Novo Estágio</button>

        <h1>Estágios</h1>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Aluno</th>
                    <th>Empresa</th>
                    <th>Estágio</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <?php foreach ($estagios as $estagio){?>
                <tr>
                    <td><?php echo $estagio->getId()?></td>
                    <td><?php echo $estagio->getAluno()->getNome()?></td>
                    <td><?php echo $estagio->getEmpresa()->getNome()?></td>
                    <td><?php echo $estagio->getStatus() ?></td>
                    <td>
                        <button onclick="location.href ='estagios?id=<?php echo $estagio->getId() ?>';" class="btn-ver">Ver</button>
                        <button onclick="location.href ='/estagios?action=edit&id=<?php echo $estagio->getId() ?>';" class="btn-editar">Editar</button>

                        <form action="estagios?id=<?php echo $estagio->getId() ?>" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            <?php }?>
        </table>
<?php include __DIR__ . "/../layout/footer.php" ?>