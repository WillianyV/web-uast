<?php include  __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
<h1>Estágio</h1>
<p><?php echo $id?></p>
<p><?php echo $estagio->getAluno()->getNome() ?></p>
<p><?php echo $estagio->getMatricula() ?></p>
<p><?php echo $estagio->getStatus() ?></p>
<p><?php echo $estagio->getDataInicioEstagio() ?></p>
<p><?php echo $estagio->getDataFimEstagio()?></p>
<p><?php echo $estagio->getNumeroSeguro() ?></p>
<p><?php echo $estagio->getCurso()->getNome() ?></p>
<p><?php echo $estagio->getTurno() ?></p>
<p><?php echo $estagio->getEmpresa()->getNomeEmpresa() ?></p>
<p><?php echo $estagio->getProfessor()->getNome()?></p>

<?php include __DIR__ . "/../layout/footer.php" ?>