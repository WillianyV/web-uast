<?php
use ProjetoSGES\src\model\DAO\CursoDAO;

include  __DIR__ . "/../layout/header.php" ?>

    </head>
    <body>
        <div class="container">
            <form action="/alunos" method="post">
                <h2>Cadastrar Aluno(a)</h2>
                <div class="div">
                    <h5>Nome</h5>
                    <input type="text" name="nome" id="nome" class="input" required>
                </div>
                <div class="div">
                    <h5>Data de Nascimento</h5>
                    <input type="date" name="data_nasc" id="data_nasc" class="input" required>
                </div>
                <div class="div">
                    <h5>Sexo</h5>
                    <select id="sexo" name="sexo" >
                        <option value="selecionar">Selecionar</option>
                        <option value="Feminino">Feminino</option>
                        <option value="Masculino">Masculino</option>
                    </select>
                </div>
                <div class="div">
                    <h5>RG</h5>
                    <input type="text" name="rg" id="rg" class="input" required>
                </div>
                <div class="div">
                    <h5>CPF</h5>
                    <input type="text" name="cpf" id="cpf" class="input" required>
                </div>
                <div class="div">
                    <h5>Numero da Matricula</h5>
                    <input type="text" name="matricula" id="matricula" class="input" required>
                </div>
                <div class="div">
                    <h5>Curso</h5>
                    <select name="curso" id="curso">
                        <option>Selecione</option>
                        <?php foreach (CursoDAO::findAll() as $curso){?>
                            <option value="<?php echo $curso->getNome() ?>"><?php echo $curso->getNome() ?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="div">
                    <h5>E-mail</h5>
                    <input type="email" name="email" id="email" class="input" required>
                </div>

                 <div class="div">
                    <h5>Cidade</h5>
                    <input type="text" name="cidade" id="cidade" class="input" required>
                </div>
                <div class="div">
                    <h5>UF</h5>
                    <input type="text" name="uf" id="uf" class="input" required>
                </div>
                <div class="div">
                    <h5>Cep</h5>
                    <input type="text" name="cep" id="cep" class="input" required>
                </div>
                <div class="div">
                    <h5>Bairro</h5>
                    <input type="text" name="bairro" id="bairro" class="input" required>
                </div>
                <div class="div">
                    <h5>Rua</h5>
                    <input type="text" name="rua" id="rua" class="input" required>
                </div>
                <div class="div">
                    <h5>Número</h5>
                    <input type="text" name="numero" id="numero" class="input" required>
                </div>

                <fieldset>
                    <legend>Cadastrar Login</legend>
                    <div class="div">
                        <h5>Login</h5>
                        <input type="text" name="login" id="login" class="input">
                    </div>
                    <div class="div">
                        <h5>Senha</h5>
                        <input type="password" name="senha" id="senha" class="input">
                    </div>
                    <div class="div">
                        <h5>Confirmar senha</h5>
                        <input type="password" name="c_senha" id="c_senha" class="input">
                    </div>
                </fieldset>
                <button type="submit">Salvar</button>
            </form>
        </div>
<!--         <script src="../../../public/js/nav_script.js"></script>-->
<?php include __DIR__ . "/../layout/footer.php" ?>



