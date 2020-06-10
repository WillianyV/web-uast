<?php include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
    <form action="/coordenacao" method="post">
        <input type="text" name="nome" id="nome" placeholder="Nome">
        <input type="text" name="login" id="login" placeholder="Login">
        <input type="password" name="senha" id="senha" placeholder="Senha">
        <input type="text" name="cod_servidor" id="cod_servidor" placeholder="Código do servidor">
        <button type="submit">Salvar</button>
    </form>
<?php include __DIR__ . "/../layout/footer.php" ?>

