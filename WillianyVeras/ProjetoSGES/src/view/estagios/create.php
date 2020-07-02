<?php
use ProjetoSGES\src\model\DAO\CursoDAO;
use ProjetoSGES\src\model\DAO\EmpresaDAO;
use ProjetoSGES\src\model\DAO\ProfessorDAO;

include __DIR__ . "/../layout/header.php" ?>
</head>
<body>
<div class="container">
    <form action="/estagios" method="post">
        <div class="div">
            <h5>Matrícula</h5>
            <input type="text" name="matricula" id="matricula" class="input" required>
        </div>
        <div class="div">
            <h5>Número do seguro</h5>
            <input type="text" name="numero_seguro" id="numero_seguro" class="input" >
        </div>
        <div class="div">
            <h5>Curso</h5>
            <select name="curso" id="curso">
                <option>Selecione</option>
                <?php foreach (CursoDAO::findAll() as $curso){?>
                    <option value="<?php echo $curso->getNome() ?>"><?php echo $curso->getNome() ?></option>
                <?php }?>
            </select>
        </div>
        <div class="div">
            <h5>Turno</h5>
            <select id="turno" name="turno" >
                <option value="selecionar">Selecione</option>
                <option value="manha">Manhã</option>
                <option value="tarde">tarde</option>
                <option value="manha">Noite</option>
            </select>
        </div>
        <div class="div">
            <h5>Empresa</h5>
            <select name="empresa" id="empresa">
                <option>Selecione</option>
                <?php foreach (EmpresaDAO::findAll() as $empresa) {?>
                    <option value="<?php echo $empresa->getNomeEmpresa() ?>"><?php echo $empresa->getNomeEmpresa() ?></option>
                <?php }?>
            </select>
        </div>
        <div class="div">
            <h5>Professor</h5>
            <select name="professor" id="professor">
                <option>Selecione</option>
                <?php foreach (ProfessorDAO::findAll() as $professor){ ?>
                    <option value="<?php echo $professor->getNome() ?>"> <?php echo $professor->getNome() ?> </option>
                <?php } ?>

        </div>
        <button type="submit">Salvar</button>
    </form>
</div>
<?php include __DIR__ . "/../layout/footer.php" ?>
