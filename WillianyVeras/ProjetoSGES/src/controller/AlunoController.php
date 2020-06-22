<?php


namespace ProjetoSGES\src\controller;
use ProjetoSGES\src\model\DAO\CursoDAO;
use ProjetoSGES\src\model\DAO\EnderecoDAO;
use ProjetoSGES\src\model\VO\AlunoVO;
use ProjetoSGES\src\model\DAO\AlunosDao;
use ProjetoSGES\src\model\VO\EnderecoVO;

class AlunoController implements InterfacesController
{

    function index()
    {
        $alunos = AlunosDao::findAll();
        require __DIR__ . "/../view/alunos/list.php";
    }

    function view()
    {
        $id = $_GET['id'];
        $aluno = AlunosDao::findById($id);
        require __DIR__ . "/../view/alunos/view.php";
    }

    function create()
    {
        require __DIR__ . "/../view/alunos/create.php";
    }

    function edit()
    {
        $id = $_GET['id'];
        $aluno = AlunosDao::findById($id);
        require __DIR__ . "/../view/alunos/edit.php";
    }

    function store()
    {
        $numero = $_POST['numero'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $cep = $_POST['cep'];
        $endereco = new EnderecoVO(null,$rua,$numero,$cidade,$uf,$cep,$bairro);
        EnderecoDAO::create($endereco);
        $nome_curso = $_POST['curso'];
        $curso = CursoDAO::findByName($nome_curso);
        $sexo = $_POST['sexo'];
        $rg = $_POST['rg'];
        $cpf = $_POST['cpf'];
        $matricula = $_POST['matricula'];
        $email = $_POST['email'];
        $data_nasc = $_POST['data_nasc'];
        $nome = $_POST['nome'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $alunoVO = new AlunoVO(null,$nome,$sexo,$email,$login,$senha,$rg,$data_nasc,$cpf,$matricula,$endereco,$curso);
        AlunosDao::create($alunoVO);
        session_start();
        $_SESSION['message'] = "Aluno : $nome, criado com sucesso!";
    }

    function update()
    {
        echo("controlador aluno");
        $id = $_GET['id'];
        $numero = $_POST['numero'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $cep = $_POST['cep'];
        $endereco = new EnderecoVO(null,$rua,$numero,$cidade,$uf,$cep,$bairro);
        $aluno = AlunosDao::findById($id);
        EnderecoDAO::update($aluno->getEndereco(),$endereco);
        $endereco = $aluno->getEndereco();

        $nome_curso = $_POST['curso'];
        $curso = CursoDAO::findByName($nome_curso);
        $sexo = $_POST['sexo'];
        $rg = $_POST['rg'];
        $cpf = $_POST['cpf'];
        $matricula = $_POST['matricula'];
        $email = $_POST['email'];
        $data_nasc = $_POST['data_nasc'];
        $nome = $_POST['nome'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $alunoVO = new AlunoVO(null,$nome,$sexo,$email,$login,$senha,$rg,$data_nasc,$cpf,$matricula,$endereco,$curso);
        AlunosDao::update($id,$alunoVO);
    }

    function delete()
    {
        $id = $_GET['id'];
        $aluno = AlunosDao::findById($id);
        EnderecoDAO::delete($aluno->getEndereco());
        AlunosDao::delete($id);
    }
}