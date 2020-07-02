<h1>Solicitações de orientação</h1>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Aluno</th>
            <th>Curso</th>
            <th>Empresa</th>
            <th>Ações</th>
        </tr>
    </thead>
    <?php foreach ($estagios as $estagio){?>
        <tr>
            <td><?php echo $estagio->getId()?></td>
            <td><?php echo $estagio->getAluno()->getNome()?></td>
            <?php $curso = CursoDAO::findById($estagio->getAluno()->getCurso())?>
            <td><?php echo $curso->getNome()?></td>
            <td><?php echo $estagio->getEmpresa()->getNome()?></td>
            <td>
                <form action="estagios?id=<?php echo $estagio->getId() ?>" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit">Rejeitar</button>
                </form>
                <!--  como chamar o metodo-->
                <button onclick="location.href ='#';" class="btn-aceitar">Aceitar</button>
            </td>
        </tr>
    <?php }?>
</table>