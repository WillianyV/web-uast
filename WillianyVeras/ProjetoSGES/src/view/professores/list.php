<?php include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>

    <?php include __DIR__ . "/../layout/navCoordenacao.php" ?>
    <div class="grid-container">
        <div>
            <button onclick="location.href ='/professores?action=create';" class="btn-novo ">Novo Professor</button>
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>VAGAS</th>
                    <th>AÇÕES</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($professores as $professor){?>
                    <tr>
                        <td><?php echo $professor->getId()?></td>
                        <td><?php echo $professor->getNome()?></td>
                        <td><?php echo $professor->getVagasOrientados()?></td>
                        <td>
                            <button onclick="location.href ='professores?id=<?php echo $professor->getId() ?>';" class="btn-ver btn-total">Visualizar</button>
                            <button onclick="location.href ='/professores?action=edit&id=<?php echo $professor->getId() ?>';" class="btn-editar btn-total">Editar</button>
                            <form action="professores?id=<?php echo $professor->getId() ?>" method="POST">
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