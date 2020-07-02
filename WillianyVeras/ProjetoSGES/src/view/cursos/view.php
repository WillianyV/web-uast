<?php include  __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
    <?php include __DIR__ . "/../layout/navCoordenacao.php" ?>

    <div class="centralizar">
        <form>
            <div class="div-form">Id</div>
            <div class="div-form"><input value="<?php echo $id?>" disabled></div>
            <div class="div-form">Nome do curso</div>
            <div class="div-form"><input value="<?php echo $curso->getNome()?>" disabled></div>
            <div class="div-form">Horas Obrigatórias de Estágio</div>
            <div class="div-form"><input value="<?php echo $curso->getHorasEstagio()?>" disabled></div>
        </form>
    </div>
<?php include __DIR__ . "/../layout/footer.php" ?>