<?php include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>

    <?php include __DIR__ . "/../layout/navCoordenacao.php" ?>

    <div class="grid-container">
        <div>
            <button onclick="location.href ='/estagios?action=create';" class="btn-novo">Novo Estágio</button>
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>ALUNO</th>
                    <th>EMPRESA</th>
                    <th>ESTÁGIO</th>
                    <th>AÇÕES</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($estagios as $estagio){?>
                    <tr>
                        <td><?php echo $estagio->getId()?></td>
                        <td><?php echo $estagio->getAluno()->getNome()?></td>
                        <td><?php echo $estagio->getEmpresa()->getNome()?></td>
                        <td><?php echo $estagio->getStatus() ?></td>
                        <td>
                            <button onclick="location.href ='estagios?id=<?php echo $estagio->getId() ?>';" class="btn-ver btn-total">Visualizar</button>
                            <button onclick="location.href ='/estagios?action=edit&id=<?php echo $estagio->getId() ?>';" class="btn-editar btn-total">Editar</button>

                            <form action="estagios?id=<?php echo $estagio->getId() ?>" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn-excluir btn-total">Excluir</button>
                            </form>
                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
<?php include __DIR__ . "/../layout/footer.php" ?>