<?php include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
    <?php include __DIR__ . "/../layout/navCoordenacao.php" ?>

    <div class="centralizar">
    <form action="/coordenacao?id=<?php echo $id ?>" method="POST">
        <input type="hidden" name="_method" value="PUT">
        <h1 class="titulos">Editar coordenador(a) <?php echo "\"" . $coordenador->getNome() . "\""  ?></h1>

        <div class="div-form">Nome</div>
        <div class="div-form"><input type="text" name="nome" id="nome" value="<?php echo $coordenador->getNome()?>" ></div>
        <div class="div-form">Código do servidor</div>
        <div class="div-form"><input type="text" name="cod_servidor" id="cod_servidor" value="<?php echo $coordenador->getCodigoServidor()?>" ></div>
        <div class="div-form">Login</div>
        <div class="div-form"><input type="text" name="login" id="login" value="<?php echo $coordenador->getLogin()?>" ></div>
        <div class="div-form">Senha</div>
        <div class="div-form"><input type="password" name="senha" id="senha"></div>
        <div class="div-form">Confirmar senha</div>
        <div class="div-form"><input type="password" name="confimar-senha" id="confimar-senha"></div>
        <div class="div-form"><button type="submit">Salvar</button></div>


    </form>
<?php include __DIR__ . "/../layout/footer.php" ?>