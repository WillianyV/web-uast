<?php include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
    <div class="container">
        <form action="/coordenacao" method="post">
            <div class="div">
                <h5>Nome</h5>
                <input type="text" name="nome" id="nome" class="input" required>
            </div>
            <div class="div">
                <h5>Código do servidor</h5>
                <input type="text" name="cod_servidor" id="cod_servidor" class="input" required>
            </div>
            <div class="div">
                <h5>Login</h5>
                <input type="text" name="login" id="login" class="input" required>
            </div>
            <div class="div">
                <h5>Senha</h5>
                <input type="password" name="senha" id="senha" class="input" required>
            </div>
            <button type="submit">Salvar</button>
        </form>
    </div>
<?php include __DIR__ . "/../layout/footer.php" ?>

