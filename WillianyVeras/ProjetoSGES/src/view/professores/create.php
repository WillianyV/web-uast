<?php
use ProjetoSGES\src\model\DAO\CursoDAO;

include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
    <?php include __DIR__ . "/../layout/navCoordenacao.php" ?>
    <div class="centralizar aumentar-top">
        <form action="/professores" method="post">
            <div class="div-form">Nome</div>
            <div class="div-form"><input type="text" name="nome" id="nome" class="input" required></div>
            <div class="div-form">Código do Servidor</div>
            <div class="div-form"><input type="text" name="cod_servidor" id="cod_servidor" class="input" required></div>
            <div class="div-form">Cursos</div>
            <?php foreach (CursoDAO::findAll() as $curso){?>
                <div class="cursos-alinhar">
                    <input type="checkbox" name="cursos[]" value="<?php echo $curso->getId() ?>">
                    <label><?php echo $curso->getNome() ?></label>
                </div>
            <?php }?>
            <div class="div-form">Quantidade vagas para orientar</div>
            <div class="div-form"><input type="number" name="vagas_orientados" id="vagas_orientados" class="input" required></div>
            <div class="div-form">Login</div>
            <div class="div-form"><input type="text" name="login" id="login" class="input" required></div>
            <div class="div-form">Senha</div>
            <div class="div-form"><input type="password" name="senha" id="senha" class="input" required></div>
            <div class="div-form">Confirmar senha</div>
            <div class="div-form"><input type="password" name="confirmar-senha" id="confirmar-senha" class="input" required></div>
            <div class="div-form"><button type="submit">Salvar</button></div>
        </form>
    </div>
   
<?php include __DIR__ . "/../layout/footer.php" ?>


