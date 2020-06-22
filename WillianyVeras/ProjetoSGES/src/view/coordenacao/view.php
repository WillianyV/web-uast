<?php include  __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
    <h1>Coordenador</h1>
    <p>ID: <?php echo $id?></p>
    <p>Nome: <?php echo $coordenador->getNome() ?></p>
    <p>Código: <?php echo $coordenador->getCodigoServidor() ?></p>
    <p>Login: <?php echo $coordenador->getLogin() ?></p>
<?php include __DIR__ . "/../layout/footer.php" ?>