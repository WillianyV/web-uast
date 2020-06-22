<?php include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
        <h1>Editar curso</h1>
        <form action="/cursos?id=<?php echo $id ?>" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <div class="div">
                <h5>Nome</h5>
                <input type="text" name="nome" id="nome" placeholder="Nome do Curso" value="<?php echo $curso->getNome()?>">
            </div>
            <div class="div">
                <h5>Horas Obrigatórias de Estágio</h5>
                <input type="number" name="horas_estagio" id="horas_estagio" placeholder="Quantidade de Horas do Estágio"
                   value="<?php echo $curso->getHorasEstagio()?>">
            </div>
            <button type="submit">Salvar</button>
        </form>
<?php include __DIR__ . "/../layout/footer.php" ?>