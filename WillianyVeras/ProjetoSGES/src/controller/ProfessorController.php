<?php


namespace ProjetoSGES\src\controller;
use ProjetoSGES\src\model\VO\ProfessorVO;
use ProjetoSGES\src\model\DAO\ProfessorDAO;

class ProfessorController implements InterfacesController
{

    function index()
    {
        $professores = ProfessorDAO::findAll();
        require __DIR__ . "/../view/professores/list.php";
    }

    function view()
    {
        $id = $_GET['id'];
        $professor = ProfessorDAO::findById($id);
        require __DIR__ . "/../view/professores/view.php";
    }

    function create()
    {
        require __DIR__ . "/../view/professores/create.php";
    }

    function edit()
    {
        $id = $_GET['id'];
        $professor = ProfessorDAO::findById($id);
        require __DIR__ . "/../view/professores/edit.php";

    }

    function store()
    {
        // TODO: Implement store() method.
    }

    function update()
    {
        // TODO: Implement update() method.
    }

    function delete()
    {
        $id = $_GET['id'];
        ProfessorDAO::delete($id);
        session_start();
        $_SESSION['message'] = "Professor excluído com sucesso!";
//        header("Location: /tarefas");
    }
}