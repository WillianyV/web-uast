<?php


namespace ProjetoSGES\src\controller;
use ProjetoSGES\src\model\DAO\CursoDAO;
use ProjetoSGES\src\model\DAO\EnderecoDAO;
use ProjetoSGES\src\model\VO\EmpresaVO;
use ProjetoSGES\src\model\DAO\EmpresaDAO;
use ProjetoSGES\src\model\VO\EnderecoVO;

class EmpresaController implements InterfacesController
{

    function index()
    {
        $empresas = EmpresaDAO::findAll();
        require __DIR__ . "/../view/empresas/list.php";
    }

    function view()
    {
        $id = $_GET['id'];
        $empresa = EmpresaDAO::findById($id);
        require __DIR__ . "/../view/empresas/view.php";
    }

    function create()
    {
        require __DIR__ . "/../view/empresas/create.php";
    }

    function edit()
    {
        $id = $_GET['id'];
        $empresa = EmpresaDAO::findById($id);
        require __DIR__ . "/../view/empresas/edit.php";
    }

    function store()
    {
        $nome_empresa = $_POST['nome_empresa'];
        $CNPJ = $_POST['CNPJ'];
        $telefone = $_POST['telefone'];
        $nome_proprietario = $_POST['nome_proprietario'];
        $CPF_proprietario = $_POST['CPF_proprietario'];
        $nome_responsavel = $_POST['nome_responsavel'];
        $CPF_responsavel = $_POST['CPF_responsavel'];
        $vagas = $_POST['vagas'];

        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $cep = $_POST['cep'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $endereco = new EnderecoVO(null,$numero,$rua,$bairro,$cidade,$uf,$cep);
        EnderecoDAO::create($endereco);

        $nome_curso = $_POST['curso'];
        $curso = CursoDAO::findByName($nome_curso);

        $empresaVO = new EmpresaVO(null,$vagas,$nome_empresa,$CNPJ,$telefone,$nome_proprietario,$nome_responsavel,$CPF_proprietario,$CPF_responsavel,$endereco,$curso);
        EmpresaDAO::create($empresaVO);
    }

    function update()
    {
        $id = $_GET['id'];
        $nome_empresa = $_POST['nome_empresa'];
        $CNPJ = $_POST['CNPJ'];
        $telefone = $_POST['telefone'];
        $cpf = $_POST['cpf'];
        $nome_proprietario = $_POST['nome_proprietario'];
        $CPF_proprietario = $_POST['CPF_proprietario'];
        $nome_responsavel = $_POST['nome_responsavel'];
        $CPF_responsavel = $_POST['CPF_responsavel'];
        $vagas = $_POST['vagas'];

        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $cep = $_POST['cep'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $endereco = new EnderecoVO(null,$numero,$rua,$bairro,$cidade,$uf,$cep);
        $empresa = EmpresaDAO::findById($id);
        EnderecoDAO::update($empresa->getEndereco(),$endereco);

        $nome_curso = $_POST['curso'];
        $curso = CursoDAO::findByName($nome_curso);

        $empresaVO = new EmpresaVO(null,$vagas,$nome_empresa,$CNPJ,$telefone,$nome_proprietario,$nome_responsavel,$CPF_proprietario,$CPF_responsavel,$endereco,$curso);
        EmpresaDAO::update($id,$empresaVO);
    }

    function delete()
    {
        $id = $_GET['id'];
        $empresa = EmpresaDAO::findById($id);
        EnderecoDAO::delete($empresa->getEndereco());
        EmpresaDAO::delete($id);
    }
}