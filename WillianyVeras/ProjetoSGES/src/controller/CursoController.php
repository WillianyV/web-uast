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
        $horas_estagio = $_POST['horas_estagio'] ;
        $nome =$_POST['nome'];
        $cursoVO = new CursoVO(null,$horas_estagio,$nome);
        CursoDAO::create($cursoVO);
        session_start();
        $_SESSION['message'] = "Curso : $nome, criado com sucesso!";

    }

    function update()
    {
        $id = $_GET['id'];
        $horas_estagio = $_POST['horas_estagio'] ;
        $nome =$_POST['nome'];
        $cursoVO = new CursoVO(null,$horas_estagio,$nome);
        CursoDAO::update($id, $cursoVO);
        session_start();
        $_SESSION['message'] = "Curso : $nome, atualizado com sucesso!!";
    }

    function delete()
    {
        $id = $_GET['id'];
        CursoDAO::delete($id);
        session_start();
        $_SESSION['message'] = "Curso excluído com sucesso!";

    }
}