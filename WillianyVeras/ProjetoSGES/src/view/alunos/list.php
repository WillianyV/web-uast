<?php
use ProjetoSGES\src\model\DAO\CursoDAO;
include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>

    <?php include __DIR__ . "/../layout/navCoordenacao.php" ?>

    <h1>Alunos</h1>

    <button onclick="location.href ='/alunos?action=create';" class="btn-novo">Novo Aluno</button>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>CPF</th>
                <th>CURSO</th>
                <th>AÇÕES</th>
            </tr>
        </thead>
        <?php foreach ($alunos as $aluno) { ?>
            <tr>
                <td><?php echo $aluno->getId() ?></td>
                <td><?php echo $aluno->getNome() ?></td>
                <td><?php echo $aluno->getCPF() ?></td>
                <?php $curso = CursoDAO::findById($aluno->getCurso())?>
                <td><?php echo $curso->getNome()?></td>
                <td>
                    <button onclick="location.href ='alunos?id=<?php echo $aluno->getId() ?>';" class="btn-ver">Ver</button>

                    <button onclick="location.href ='/alunos?action=edit&id=<?php echo $aluno->getId() ?>';" class="btn-editar">Editar</button>

                    <form action="alunos?id=<?php echo $aluno->getId() ?>" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>

<?php include __DIR__ . "/../layout/footer.php" ?>