<?php include __DIR__ . "/../layout/header.php" ?>

    </head>
    <body>

    <?php include __DIR__ . "/../layout/navCoordenacao.php" ?>
<div class="grid-container">
    <div>
        <button onclick="location.href ='/coordenacao?action=create';" class="btn-novo">Novo Coordenador</button>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>CÓDIGO DO SERVIDOR</th>
                <th>AÇÕES</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($coordenacao as $coordenador){?>
                <tr>
                    <td><?php echo $coordenador->getId()?></td>
                    <td><?php echo $coordenador->getNome()?></td>
                    <td><?php echo $coordenador->getCodigoServidor()?></td>
                    <td class="td-last">
                        <button onclick="location.href ='coordenacao?id=<?php echo $coordenador->getId() ?>';" class="btn-ver btn-total">Visualizar</button>
                        <button onclick="location.href ='/coordenacao?action=edit&id=<?php echo $coordenador->getId() ?>';" class="btn-editar btn-total">Editar</button>
                        <form action="coordenacao?id=<?php echo $coordenador->getId() ?>" method="POST">
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