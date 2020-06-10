<?php include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
        <form action="/alunos?id=<?php echo $id ?>" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <input type="text" name="nome" id="nome" placeholder="Nome do Curso" value="<?php echo $curso->getNome()?>">
            <input type="number" name="horas_estagio" id="horas_estagio" placeholder="Quantidade de Horas do Estágio"
                   value="<?php echo $curso->getHorasEstagio()?>">
            <button type="submit">Salvar</button>
        </form>
<?php include __DIR__ . "/../layout/footer.php" ?>