<?php include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>

    <?php include __DIR__ . "/../layout/navCoordenacao.php" ?>

    <h1>Professores</h1>

    <button onclick="location.href ='/professores?action=create';" class="btn-novo">Novo Professor</button>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Vagas</th>
            </tr>
        </thead>
        <?php foreach ($professores as $professor){?>
            <tr>
                <td><?php echo $professor->getId()?></td>
                <td><?php echo $professor->getNome()?></td>
                <td><?php echo $professor->getVagasOrientados()?></td>
                <td>
                    <button onclick="location.href ='professores?id=<?php echo $professor->getId() ?>';" class="btn-ver">Ver</button>
                    <button onclick="location.href ='/professores?action=edit&id=<?php echo $professor->getId() ?>';" class="btn-editar">Editar</button>

                    <form action="professores?id=<?php echo $professor->getId() ?>" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        <?php }?>
    </table>
<?php include __DIR__ . "/../layout/footer.php" ?>