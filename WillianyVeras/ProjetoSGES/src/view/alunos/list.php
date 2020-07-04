<?php
use ProjetoSGES\src\model\DAO\CursoDAO;
include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>

    <?php include __DIR__ . "/../layout/navCoordenacao.php" ?>
    <div class="grid-container">
        <div>
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
                <tbody>
                    <?php foreach ($alunos as $aluno) { ?>
                        <tr>
                            <td><?php echo $aluno->getId() ?></td>
                            <td><?php echo $aluno->getNome() ?></td>
                            <td><?php echo $aluno->getCPF() ?></td>
                            <?php $curso = CursoDAO::findById($aluno->getCurso())?>
                            <td><?php echo $curso->getNome()?></td>
                            <td>
                                <button onclick="location.href ='alunos?id=<?php echo $aluno->getId() ?>';" class="btn-ver btn-total">Visualizar</button>

                                <button onclick="location.href ='/alunos?action=edit&id=<?php echo $aluno->getId() ?>';" class="btn-editar btn-total">Editar</button>

                                <form action="alunos?id=<?php echo $aluno->getId() ?>" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn-excluir btn-total">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
<?php include __DIR__ . "/../layout/footer.php" ?>