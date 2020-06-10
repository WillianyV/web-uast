<?php include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
    <form action="/cursos" method="post">
        <input type="text" name="nome" id="nome" placeholder="Nome">
        <input type="number" name="horas_estagio" id="horas_estagio" placeholder="Horas">
        <button type="submit">Salvar</button>
    </form>
<?php include __DIR__ . "/../layout/footer.php" ?>