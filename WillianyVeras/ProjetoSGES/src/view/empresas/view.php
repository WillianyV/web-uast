<?php
use ProjetoSGES\src\model\DAO\CursoDAO;
use ProjetoSGES\src\model\DAO\EnderecoDAO;
include  __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>
        <h1>Empresa</h1>
        <p><?php echo $id?></p>
        <p>Nome: <?php echo $empresa->getNomeEmpresa() ?></p>
        <p>Vagas: <?php echo $empresa->getVagas() ?></p>
        <p>CNPJ: <?php echo $empresa->getCNPJ() ?></p>
        <p>Telefone: <?php echo $empresa->getTelefone() ?></p>
        <p>Nome do Proprietario da empresa: <?php echo $empresa->getNomeProprietario() ?></p>
        <p>CPF do Proprietario da empresa: <?php echo $empresa->getCPFProprietario() ?></p>
        <p>Nome do Responsavel pelo setor: <?php echo $empresa->getNomeResponsavel() ?></p>
        <p>CPF do Responsavel pelo setor: <?php echo $empresa->getCPFResponsavel() ?></p>
        <?php $curso = CursoDAO::findById($empresa->getCurso())?>
        <p>Curso: <?php echo $curso->getNome() ?></p>
        <?php $endereco = EnderecoDAO::findById($empresa->getEndereco())?>
        <p>Endereço da empresa: </p>
        <p>Cidade: <?php echo $endereco->getCidade() ?></p>
        <p>Uf: <?php echo $endereco->getUf() ?></p>
        <p>Cep: <?php echo $endereco->getCep() ?></p>
        <p>Bairro: <?php echo $endereco->getBairro() ?></p>
        <p>Rua: <?php echo $endereco->getRua() ?></p>
        <p>Nº: <?php echo $endereco->getNumero() ?></p>

<?php include __DIR__ . "/../layout/footer.php" ?>