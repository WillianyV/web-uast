<?php include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
<h1>Editar Estagio</h1>
<form action="/estagios?id=<?php echo $id ?>" method="POST">
    <input type="hidden" name="_method" value="PUT">
    <div class="div">
        <h5>Aluno</h5>
        <input type="text" name="aluno" id="aluno" value="<?php echo $estagio->getAluno()->getNome() ?>">
    </div>
    <div class="div">
        <h5>Matrícula</h5>
        <input type="text" name="matricula" id="matricula" value="<?php echo $estagio->getMatricula() ?>">
    </div>
    <div>
        <h5>Status</h5>
        <select id="status" name="status">
            <option value="solicitado">Solicitado</option>
            <option value="aceito">Aceito</option>
            <option value="ativo">Ativo</option>
            <option value="terminado">Terminado</option>
            <option value="cancelado">Cancelado</option>
        </select>
    </div>
    <div>
        <h5>Data do Início</h5>
        <input type="date" name="data_inicio_estagio" id="data_inicio_estagio" >
    </div>
    <div>
        <h5>Data do Fim</h5>
        <input type="date" name="data_fim_estagio" id="data_fim_estagio" >
    </div>
    <div class="div">
        <h5>Número do seguro</h5>
        <input type="text" name="numero_seguro" id="numero_seguro" value="<?php echo $estagio->getNumeroSeguro() ?>">
    </div>
    <div class="div">
        <h5>Curso</h5>
        <select name="curso" id="curso">
            <option value="<?php echo $estagio->getCurso()->getNome() ?>"><?php echo $estagio->getCurso()->getNome() ?></option>
            <?php foreach (CursoDAO::findAll() as $curso){?>
                <option value="<?php echo $curso->getNome() ?>"><?php echo $curso->getNome() ?></option>
            <?php }?>
        </select>
    </div>
    <div class="div">
        <h5>Turno</h5>
        <select id="turno" name="turno" >
            <option value="<?php echo $estagio->getTurno() ?>"><?php echo $estagio->getTurno() ?></option>
            <option value="manha">Manhã</option>
            <option value="tarde">tarde</option>
            <option value="manha">Noite</option>
        </select>
    </div>
    <div class="div">
        <h5>Empresa</h5>
        <select name="empresa" id="empresa">
            <option value="<?php echo $estagio->getEmpresa()->getNomeEmpresa()?>" ><?php echo $estagio->getEmpresa()->getNomeEmpresa() ?></option>
            <?php foreach (EmpresaDAO::findAll() as $empresa){?>
                <option value="<?php echo $empresa->getNomeEmpresa() ?>"><?php echo $empresa->getNomeEmpresa() ?></option>
            <?php }?>
        </select>
    </div>
    <div class="div">
        <h5>Professor</h5>
        <select name="professor" id="professor">
            <option value="<?php echo $estagio->getProfessor()->getNome() ?>"><?php echo $estagio->getProfessor()->getNome() ?></option>
            <?php foreach (ProfessorDAO::findAll() as $professor){?>
                <option value="<?php echo $professor->getNome() ?>"><?php echo $professor->getNome() ?></option>
            <?php }?>
    </div>

    <button type="submit">Salvar</button>
</form>
<?php include __DIR__ . "/../layout/footer.php" ?>