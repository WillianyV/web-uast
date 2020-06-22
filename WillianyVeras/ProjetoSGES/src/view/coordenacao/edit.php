<?php include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
<h1>Editar Coordenador</h1>
<form action="/coordenacao?id=<?php echo $id ?>" method="POST">
    <input type="hidden" name="_method" value="PUT">

    <div class="div">
        <h5>Nome</h5>
        <input type="text" name="nome" id="nome" value="<?php echo $coordenador->getNome()?>" >
    </div>
    <div class="div">
        <h5>Código do servidor</h5>
        <input type="text" name="cod_servidor" id="cod_servidor" value="<?php echo $coordenador->getCodigoServidor()?>" >
    </div>
    <div class="div">
        <h5>Login</h5>
        <input type="text" name="login" id="login" value="<?php echo $coordenador->getLogin()?>" >
    </div>
    <div class="div">
        <h5>Senha</h5>
        <input type="password" name="senha" id="senha">
    </div>
    <button type="submit">Salvar</button>
</form>
<?php include __DIR__ . "/../layout/footer.php" ?>