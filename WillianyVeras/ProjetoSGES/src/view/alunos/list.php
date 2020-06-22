<?php
use ProjetoSGES\src\model\DAO\CursoDAO;
include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
    <h1>Alunos</h1>
    <table style="border: 1px solid black;">
        <thead>
            <th>Id</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Curso</th>
            <th>Ações</th>
        </thead>
        <?php foreach ($alunos as $aluno) { ?>
            <tr>
                <td><?php echo $aluno->getId() ?></td>
                <td><?php echo $aluno->getNome() ?></td>
                <td><?php echo $aluno->getCPF() ?></td>
                <?php $curso = CursoDAO::findById($aluno->getCurso())?>
                <td><?php echo $curso->getNome()?></td>
                <td><a href="alunos?id=<?php echo $aluno->getId() ?>">Ver</a></td>
                <td><a href="/alunos?action=edit&id=<?php echo $aluno->getId() ?>">Editar</a></td>
                <td>
                    <form action="alunos?id=<?php echo $aluno->getId() ?>" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>

<?php include __DIR__ . "/../layout/footer.php" ?>