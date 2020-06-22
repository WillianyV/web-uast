<?php include  __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
    <h1>view cursos</h1>
    <p>ID: <?php echo $id?></p>
    <p>Nome: <?php echo $curso->getNome()?></p>
    <p>Horas de Estágio:<?php echo $curso->getHorasEstagio()?></p>
<?php include __DIR__ . "/../layout/footer.php" ?>