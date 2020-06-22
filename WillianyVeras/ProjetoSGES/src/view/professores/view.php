<?php include  __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
        <h1>view Professor</h1>
        <p><?php echo $id?></p>
        <p><?php echo $professor->getNome()?></p>
        <p><?php echo $professor->getCodServidor()?></p>
<!--        fazer foreach e colocar echo-->
        <p><?php echo $professor->getCursos() ?></p>
        <p><?php echo $professor->getVagasOrientados()?></p>
        <p><?php echo $professor->getLogin()?></p>

<?php include __DIR__ . "/../layout/footer.php" ?>


