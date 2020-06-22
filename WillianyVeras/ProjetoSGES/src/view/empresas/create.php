<?php
use ProjetoSGES\src\model\DAO\CursoDAO;
include __DIR__ . "/../layout/header.php" ?>
</head>
<body>
    <div class="container">
        <form action="/empresas" method="post">
            <h2>Cadastrar Empresas</h2>
            <div class="div">
                <h5>Nome da empresa</h5>
                <input type="text" name="nome_empresa" id="nome_empresa" class="input" required>
            </div>
            <div class="div">
                <h5>CNPJ</h5>
                <input type="text" name="CNPJ" id="CNPJ" class="input" required>
            </div>
            <div class="div">
                <h5>Telefone</h5>
                <input type="text" name="telefone" id="telefone" class="input" required>
            </div>
            <div class="div">
                <h5>Nome do Proprietário</h5>
                <input type="text" name="nome_proprietario" id="nome_proprietario" class="input" required>
            </div>
            <div class="div">
                <h5>CPF do Proprietário</h5>
                <input type="text" name="CPF_proprietario" id="CPF_proprietario" class="input" required>
            </div>
            <div class="div">
                <h5>Nome do Responsável do Setor</h5>
                <input type="text" name="nome_responsavel" id="nome_responsavel" class="input" required>
            </div>
            <div class="div">
                <h5>CPF do Responsável do Setor</h5>
                <input type="text" name="CPF_responsavel" id="CPF_responsavel" class="input" required>
            </div>
            <fieldset>
                <legend>Endereço da Empresa</legend>
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
            </fieldset>
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
                <h5>Número de Vagas</h5>
                <input type="number" name="vagas" id="vagas" class="input">
            </div>
            <button type="submit">Salvar</button>
        </form>
    </div>

<?php include __DIR__ . "/../layout/footer.php" ?>