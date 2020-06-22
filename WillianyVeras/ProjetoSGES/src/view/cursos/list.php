<?php include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
    <h1>Cursos</h1>
    <table style="border: 1px solid black;">
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Horas de Estágio</td>
            <td>Ações</td>
        </tr>
        <?php foreach ($cursos as $curso){?>
            <tr>
                <td><?php echo $curso->getId()?></td>
                <td><?php echo $curso->getNome()?></td>
                <td><?php echo $curso->getHorasEstagio()?></td>
                <td><a href="cursos?id=<?php echo $curso->getId() ?>">Ver</a></td>
                <td><a href="/cursos?action=edit&id=<?php echo $curso->getId() ?>">Editar</a></td>
                <td>
                    <form action="cursos?id=<?php echo $curso->getId() ?>" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        <?php }?>
    </table>
<?php include __DIR__ . "/../layout/footer.php" ?>