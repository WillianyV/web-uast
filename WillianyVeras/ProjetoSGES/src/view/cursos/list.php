<?php include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
    <h1>Cursos</h1>

    <button onclick="location.href ='/cursos?action=create';" class="btn-novo">Novo Curso</button>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>HORAS DE ESTÁGIO</th>
                <th>AÇÕES</th>
            </tr>
        </thead>
        <?php foreach ($cursos as $curso){?>
            <tr>
                <td><?php echo $curso->getId()?></td>
                <td><?php echo $curso->getNome()?></td>
                <td><?php echo $curso->getHorasEstagio()?></td>
                <td>
                    <button onclick="location.href ='cursos?id=<?php echo $curso->getId() ?>';" class="btn-ver">Ver</button>
                    <button onclick="location.href ='/cursos?action=edit&id=<?php echo $curso->getId() ?>';" class="btn-editar">Editar</button>
                    <form action="cursos?id=<?php echo $curso->getId() ?>" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn-excluir">Excluir</button>
                    </form>
                </td>
            </tr>
        <?php }?>
    </table>
<?php include __DIR__ . "/../layout/footer.php" ?>