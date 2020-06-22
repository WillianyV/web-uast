<?php include __DIR__ . "/../layout/header.php" ?>

    </head>
    <body>
    <div class="container">
        <form action="/cursos" method="post">
            <div class="div">
                <h5>Nome</h5>
                <input type="text" name="nome" id="nome" class="input" required>
            </div>
            <div class="div">
                <h5>Horas Obrigatórias de Estágio</h5>
                <input type="number" name="horas_estagio" id="horas_estagio" class="input"  required>
            </div>
            <button type="submit">Salvar</button>
        </form>
    </div>

<?php include __DIR__ . "/../layout/footer.php" ?>