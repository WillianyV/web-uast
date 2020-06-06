<?php


namespace ProjetoSGES\src\controller;
use ProjetoSGES\src\model\VO\CursoVO;
use ProjetoSGES\src\model\DAO\CursoDAO;

class CursoController implements InterfacesController
{

    function index()
    {
        $cursos = CursoDAO::findAll();
        require __DIR__ . "/../view/cursos/list.php";

    }

    function view()
    {
        $id = $_GET['id'];
        $curso = CursoDAO::findById($id);
        require __DIR__ . "/../view/cursos/view.php";
    }

    function create()
    {
        require __DIR__ . "/../view/cursos/create.php";
    }

    function edit()
    {
        $id = $_GET['id'];
        $curso = CursoDAO::findById($id);
        require __DIR__ . "/../view/cursos/edit.php";

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
        CursoDAO::delete($id);
        session_start();
        $_SESSION['message'] = "Curso excluído com sucesso!";

    }
}