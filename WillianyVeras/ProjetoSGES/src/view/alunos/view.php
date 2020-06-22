<?php
use ProjetoSGES\src\model\DAO\CursoDAO;
use ProjetoSGES\src\model\DAO\EnderecoDAO;
include  __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
<h1>Aluno</h1>

<p>ID: <?php echo $id?></p>
<p>Nome: <?php echo $aluno->getNome()?></p>
<p>D/N: <?php echo $aluno->getDataNasc() ?></p>
<p>Sexo: <?php echo $aluno->getSexo() ?></p>
<p>Rg: <?php echo $aluno->getRg() ?></p>
<p>CPF: <?php echo $aluno->getCpf() ?></p>
<p>Matricula: <?php echo $aluno->getMatricula() ?></p>
<?php $curso = CursoDAO::findById($aluno->getCurso())?>
<p>Curso: <?php echo $curso->getNome()?></p>
<p>E-mail: <?php echo $aluno->getEmail() ?></p>
<?php $endereco = EnderecoDAO::findById($aluno->getEndereco())?>
<p>Cidade: <?php echo $endereco->getCidade() ?></p>
<p>Uf: <?php echo $endereco->getUf() ?></p>
<p>Cep: <?php echo $endereco->getCep() ?></p>
<p>Bairro: <?php echo $endereco->getBairro() ?></p>
<p>Rua: <?php echo $endereco->getRua() ?></p>
<p>Nº: <?php echo $endereco->getNumero() ?></p>
<p>Login: <?php echo $aluno->getLogin() ?></p>

<?php include __DIR__ . "/../layout/footer.php" ?>
