<?php include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
<h1>Coordenação</h1>

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
    <?php foreach ($coordenacao as $coordenador){?>
        <tr>
            <td><?php echo $coordenador->getId()?></td>
            <td><?php echo $coordenador->getNome()?></td>
            <td><?php echo $coordenador->getCodigoServidor()?></td>
            <td>
                <button onclick="location.href ='coordenacao?id=<?php echo $coordenador->getId() ?>';" class="btn-ver">Ver</button>

                <button onclick="location.href ='/coordenacao?action=edit&id=<?php echo $coordenador->getId() ?>';" class="btn-editar">Editar</button>

                <form action="coordenacao?id=<?php echo $coordenador->getId() ?>" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
    <?php }?>
</table>
<?php include __DIR__ . "/../layout/footer.php" ?>