<?php include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
    <?php include __DIR__ . "/../layout/navCoordenacao.php" ?>
    <div class="centralizar aumentar-top">
        <form action="/coordenacao" method="post">
            <div class="div-form">Nome</div>
            <div class="div-form"><input type="text" name="nome" id="nome" class="input" required></div>
            <div class="div-form">Código do servidor</div>
            <div class="div-form"><input type="text" name="cod_servidor" id="cod_servidor" class="input" required></div>
            <div class="div-form">Login</div>
            <div class="div-form"><input type="text" name="login" id="login" class="input" required></div>
            <div class="div-form">Senha</div>
            <div class="div-form"><input type="password" name="senha" id="senha" class="input" required></div>
            <div class="div-form">Confimar senha</div>
            <div class="div-form"><input type="password" name="confimar-senha" id="confimar-senha" class="input" required></div>

            <div class="div-form"><button type="submit">Salvar</button></div>
        </form>
    </div>
<?php include __DIR__ . "/../layout/footer.php" ?>

