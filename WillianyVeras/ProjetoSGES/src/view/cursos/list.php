<?php include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>

    <?php include __DIR__ . "/../layout/navCoordenacao.php" ?>

    <div class="grid-container">
        <div>
            <button onclick="location.href ='/cursos?action=create';" class="btn-novo">Novo Curso</button>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>HORAS</th>
                        <th>AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cursos as $curso){?>
                        <tr>
                            <td><?php echo $curso->getId()?></td>
                            <td class="td-nome"><?php echo $curso->getNome()?></td>
                            <td> <?php echo $curso->getHorasEstagio()?> </td>
                            <td class="td-last">
                                <button onclick="location.href ='cursos?id=<?php echo $curso->getId() ?>';" class="btn-ver btn-total">Visualizar</button>
                                <button onclick="location.href ='/cursos?action=edit&id=<?php echo $curso->getId() ?>';" class="btn-editar btn-total">Editar</button>
                                <form action="cursos?id=<?php echo $curso->getId() ?>" method="POST" style="white-space: nowrap;">
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