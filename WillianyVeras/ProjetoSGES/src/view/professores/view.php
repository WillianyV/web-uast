<?php use ProjetoSGES\src\model\DAO\CursoDAO;
use ProjetoSGES\src\model\DAO\ProfessorCursoDAO;

include  __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
        <?php include __DIR__ . "/../layout/navCoordenacao.php" ?>

        <div class="centralizar">
            <form>
                <div class="div-form">ID</div>
                <div class="div-form"><input value="<?php echo $id?>" disabled></div>
                <div class="div-form">Nome do professor</div>
                <div class="div-form"><input value="<?php echo $professor->getNome()?>" disabled></div>
                <div class="div-form">Código do Servidor</div>
                <div class="div-form"><input value="<?php echo $professor->getCodServidor()?>" disabled></div>
                <div class="div-form">Cursos</div>

                <?php
                $cursosId = ProfessorCursoDAO::findByProfessorId($id);
                $curso;
                foreach ($cursosId as $idCurso){
                     $curso = CursoDAO::findById($idCurso);
                     ?>
                    <div class="div-form"><input value="<?php echo $curso->getNome()?>" disabled></div>
                    <?php
                }
                ?>

                <div class="div-form"><input value="" disabled></div>
                <div class="div-form">Vagas</div>
                <div class="div-form"><input value="<?php echo $professor->getVagasOrientados()?>" disabled></div>
                <div class="div-form">Login</div>
                <div class="div-form"><input value="<?php echo $professor->getLogin()?>" disabled></div>
            </form>
        </div>
<?php include __DIR__ . "/../layout/footer.php" ?>


