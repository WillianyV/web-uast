<?php


namespace ProjetoSGES\src\controller;
use ProjetoSGES\src\model\VO\AlunoVO;
use ProjetoSGES\src\model\DAO\AlunosDao;

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

    }

    function update()
    {

    }

    function delete()
    {
        $id = $_GET['id'];
        AlunosDao::delete($id);
        session_start();
        $_SESSION['message'] = "Aluno excluído com sucesso!";
//        header("Location: /tarefas");
    }
}