<?php include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
    <?php include __DIR__ . "/../layout/navCoordenacao.php" ?>
    <div class="centralizar">
        <form action="/cursos" method="post">
            <div class="div-form">Nome do curso</div>
            <div class="div-form"><input type="text" name="nome" id="nome" class="input" required></div>
            <div class="div-form">Horas Obrigatórias de Estágio</div>
            <div class="div-form"><input type="number" name="horas_estagio" id="horas_estagio" class="input"  required></div>
            <div class="div-form"><button type="submit">Salvar</button></div>
        </form>
    </div>
    <script src="//<?php echo $_SERVER["HTTP_HOST"];?>/js/login_script.js"></script>
<?php include __DIR__ . "/../layout/footer.php" ?>