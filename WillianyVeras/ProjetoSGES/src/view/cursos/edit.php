<?php include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
    <?php include __DIR__ . "/../layout/navCoordenacao.php" ?>

        <div class="centralizar">
            <form action="/cursos?id=<?php echo $id ?>" method="POST">
                <input type="hidden" name="_method" value="PUT">

                <div class="div-form">Nome do curso</div>
                <div class="div-form"><input type="text" name="nome" id="nome" placeholder="Nome do Curso" value="<?php echo $curso->getNome()?>"></div>

                <div class="div-form">Horas Obrigatórias de Estágio</div>
                <div class="div-form"><input type="number" name="horas_estagio" id="horas_estagio" placeholder="Quantidade de Horas do Estágio"
                                             value="<?php echo $curso->getHorasEstagio()?>"></div>

                <div class="div-form"><button type="submit">Salvar</button></div>

            </form>
        </div>
<?php include __DIR__ . "/../layout/footer.php" ?>