<?php
use ProjetoSGES\src\model\DAO\CursoDAO;
use ProjetoSGES\src\model\DAO\EnderecoDAO;
include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
<h1>Editar Aluno</h1>
<form action="/alunos?id=<?php echo $id ?>" method="POST">
    <input type="hidden" name="_method" value="PUT">
    <div class="div">
        <h5>Nome</h5>
        <input type="text" name="nome" id="nome" value="<?php echo $aluno->getNome() ?>" >
    </div>
    <div class="div">
        <h5>Data de Nascimento</h5>
        <input type="date" name="data_nasc" id="data_nasc" value="<?php echo $aluno->getDataNasc() ?>" >
    </div>
    <div class="div">
        <h5>Sexo</h5>
        <select id="sexo" name="sexo" >
            <option value="">Selecione</option>
            <option value="Feminino" <?php if($aluno->getSexo() == "Feminino"){echo "selected";}?>>Feminino</option>
            <option value="Masculino" <?php if($aluno->getSexo() == "Masculino"){echo "selected";}?>>Masculino</option>
        </select>
    </div>
    <div class="div">
        <h5>RG</h5>
        <input type="text" name="rg" id="rg" value="<?php echo $aluno->getRg() ?>" >
    </div>
    <div class="div">
        <h5>CPF</h5>
        <input type="text" name="cpf" id="cpf" value="<?php echo $aluno->getCpf() ?>" >
    </div>
    <div class="div">
        <h5>Numero da Matricula</h5>
        <input type="text" name="matricula" id="matricula" value="<?php echo $aluno->getMatricula() ?>" >
    </div>
    <div class="div">
        <h5>Curso</h5>
        <select name="curso" id="curso">

            <?php $c = CursoDAO::findById($aluno->getCurso())?>
            <option value="<?php echo $c->getNome() ?>"><?php echo $c->getNome() ?></option>
            <?php foreach (CursoDAO::findAll() as $curso){?>
                <option value="<?php echo $curso->getNome() ?>"><?php echo $curso->getNome() ?></option>
            <?php }?>
        </select>
    </div>
    <div class="div">
        <h5>E-mail</h5>
        <input type="email" name="email" id="email" value="<?php echo $aluno->getEmail() ?>" >
    </div><!--    FIM EDITAR ALUNO-->
<!--    EDITAR ENDEREÇO-->
    <?php $endereco = EnderecoDAO::findById($aluno->getEndereco())?>
    <div class="div">
        <h5>Cidade</h5>
        <input type="text" name="cidade" id="cidade" value="<?php echo $endereco->getCidade() ?>" >
    </div>
    <div class="div">
        <h5>UF</h5>
        <input type="text" name="uf" id="uf" value="<?php echo $endereco->getUf() ?>" >
    </div>
    <div class="div">
        <h5>Cep</h5>
        <input type="text" name="cep" id="cep" value="<?php echo $endereco->getCep() ?>" >
    </div>
    <div class="div">
        <h5>Bairro</h5>
        <input type="text" name="bairro" id="bairro" value="<?php echo $endereco->getBairro() ?>" >
    </div>
    <div class="div">
        <h5>Rua</h5>
        <input type="text" name="rua" id="rua" value="<?php echo $endereco->getRua() ?>" >
    </div>
    <div class="div">
        <h5>Número</h5>
        <input type="text" name="numero" id="numero" value="<?php echo $endereco->getNumero() ?>" >
    </div> <!--    FIM EDITAR ENDEREÇO-->
<!--    EDITAR LOGIN-->
    <fieldset>
        <legend>Editar Login</legend>
        <div class="div">
            <h5>Login</h5>
            <input type="text" name="login" id="login" value="<?php echo $aluno->getLogin() ?>">
        </div>
        <div class="div">
            <h5>Senha</h5>
            <input type="password" name="senha" id="senha" >
        </div>
        <div class="div">
            <h5>Confirmar senha</h5>
            <input type="password" name="c_senha" id="c_senha" >
        </div>
    </fieldset> <!-- FIM EDITAR LOGIN-->
    <button type="submit">Salvar</button>
</form>
<?php include __DIR__ . "/../layout/footer.php" ?>
