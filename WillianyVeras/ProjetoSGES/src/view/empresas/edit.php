<?php
use ProjetoSGES\src\model\DAO\EnderecoDAO;
use ProjetoSGES\src\model\DAO\CursoDAO;
include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
        <h1>Editar Empresa</h1>
        <form action="/empresas?id=<?php echo $id ?>" method="POST">
            <input type="hidden" name="_method" value="PUT">

            <div class="div">
                <h5>Nome da empresa</h5>
                <input type="text" name="nome_empresa" id="nome_empresa" value="<?php echo $empresa->getNomeEmpresa()?>">
            </div>
            <div class="div">
                <h5>CNPJ</h5>
                <input type="text" name="CNPJ" id="CNPJ" value="<?php echo $empresa->getCNPJ()?>">
            </div>
            <div class="div">
                <h5>Telefone</h5>
                <input type="text" name="telefone" id="telefone" value="<?php echo $empresa->getTelefone()?>">
            </div>
            <div class="div">
                <h5>Nome do Proprietário</h5>
                <input type="text" name="nome_proprietario" id="nome_proprietario" value="<?php echo $empresa->getNomeProprietario()?>">
            </div>
            <div class="div">
                <h5>CPF do Proprietário</h5>
                <input type="text" name="CPF_proprietario" id="CPF_proprietario" value="<?php echo $empresa->getCPFProprietario()?>">
            </div>
            <div class="div">
                <h5>Nome do Responsável do Setor</h5>
                <input type="text" name="nome_responsavel" id="nome_responsavel" value="<?php echo $empresa->getNomeResponsavel()?>">
            </div>
            <div class="div">
                <h5>CPF do Responsável do Setor</h5>
                <input type="text" name="CPF_responsavel" id="CPF_responsavel" value="<?php echo $empresa->getCPFResponsavel()?>">
            </div>
            <fieldset>
                <?php $endereco = EnderecoDAO::findById($empresa->getEndereco())?>
                <legend>Endereço da Empresa</legend>
                <div class="div">
                    <h5>Cidade</h5>
                    <input type="text" name="cidade" id="cidade" value="<?php echo $endereco->getCidade() ?>">
                </div>
                <div class="div">
                    <h5>UF</h5>
                    <input type="text" name="uf" id="uf" value="<?php echo $endereco->getUf() ?>">
                </div>
                <div class="div">
                    <h5>Cep</h5>
                    <input type="text" name="cep" id="cep" value="<?php echo $endereco->getCep() ?>">
                </div>
                <div class="div">
                    <h5>Bairro</h5>
                    <input type="text" name="bairro" id="bairro" value="<?php echo $endereco->getBairro() ?>">
                </div>
                <div class="div">
                    <h5>Rua</h5>
                    <input type="text" name="rua" id="rua" value="<?php echo $endereco->getRua() ?>">
                </div>
                <div class="div">
                    <h5>Número</h5>
                    <input type="text" name="numero" id="numero" value="<?php echo $endereco->getNumero() ?>">
                </div>
            </fieldset>
            <?php $c = CursoDAO::findById($empresa->getCurso())?>
            <div class="div">
                <h5>Curso</h5>
                <select name="curso" id="curso">
                    <option value="<?php echo $c->getNome()?>"><?php echo $c->getNome()?></option>
                    <?php foreach (CursoDAO::findAll() as $curso){?>
                        <option value="<?php echo $curso->getNome() ?>"><?php echo $curso->getNome() ?></option>
                    <?php }?>
                </select>
            </div>
            <div class="div">
                <h5>Número de Vagas</h5>
                <input type="number" name="vagas" id="vagas" value="<?php echo $empresa->getVagas() ?>">
            </div>


            <button type="submit">Salvar</button>
        </form>
<?php include __DIR__ . "/../layout/footer.php" ?>