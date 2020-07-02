<?php use ProjetoSGES\src\model\DAO\CursoDAO;
use ProjetoSGES\src\model\DAO\ProfessorCursoDAO;

include  __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
        <h1>view Professor</h1>
        <p>ID: <?php echo $id?></p>
        <p>Nome: <?php echo $professor->getNome()?></p>
        <p>Código do Servidor: <?php echo $professor->getCodServidor()?></p>
        <p>
            Cursos:
            <?php
            $cursosId = ProfessorCursoDAO::findByProfessorId($id);
            echo $id;
            var_dump($cursosId);
            foreach ($cursosId as $idCurso){
                echo "passou 2";
                echo CursoDAO::findById($idCurso);

            }
            ?>
        </p>
        <p>Vagas: <?php echo $professor->getVagasOrientados()?></p>
        <p>Login: <?php echo $professor->getLogin()?></p>

<?php include __DIR__ . "/../layout/footer.php" ?>


