<?php include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
<h1>Editar Professor</h1>
<form action="/professores?id=<?php echo $id ?>" method="POST">
    <input type="hidden" name="_method" value="PUT">
    <div class="div">
        <h5>Nome</h5>
        <input type="text" name="nome" id="nome" value="<?php echo $professor->getNome()?>">
    </div>
    <div class="div">
        <h5>Código do Servidor</h5>
        <input type="text" name="cod_servidor" id="cod_servidor" value="<?php echo $professor->getCodServidor()?>">
    </div>
    <div class="div">
<!--        como fazer para deoxar elas selecionados-->
        <h5>Cursos</h5>
        <?php foreach (CursoDAO::findAll() as $curso){?>
            <input type="checkbox" name="cursos[]" value="<?php echo $curso->getNome() ?>">
            <label><?php echo $curso->getNome() ?></label>
        <?php }?>
    </div>
    <div class="div">
        <h5>Quantidade vagas para orientar</h5>
        <input type="number" name="vagas_orientados" id="vagas_orientados" value="<?php echo $professor->getVagasOrientados()?>">
    </div>
    <div class="div">
        <h5>Login</h5>
        <input type="text" name="login" id="login" value="<?php echo $professor->getLogin()?>">
    </div>
    <div class="div">
        <h5>Senha</h5>
        <input type="password" name="senha" id="senha" value="<?php echo $professor->getSenha()?>">
    </div>
    <button type="submit">Salvar</button>
</form>
<?php include __DIR__ . "/../layout/footer.php" ?>