<?php include  __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
    <?php include __DIR__ . "/../layout/navCoordenacao.php" ?>
    <div class="centralizar">
        <form>
            <div class="div-form">Id</div>
            <div class="div-form"><input value="<?php echo $id?>" disabled></div>
            <div class="div-form">Nome</div>
            <div class="div-form"><input value="<?php echo $coordenador->getNome() ?>" disabled></div>
            <div class="div-form">Código do servidor</div>
            <div class="div-form"><input value="<?php echo $coordenador->getCodigoServidor() ?>" disabled></div>
            <div class="div-form">Login</div>
            <div class="div-form"><input value="<?php echo $coordenador->getLogin() ?>" disabled></div>
        </form>
    </div>
<?php include __DIR__ . "/../layout/footer.php" ?>