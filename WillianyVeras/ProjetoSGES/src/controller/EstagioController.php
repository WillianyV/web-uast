<?php


namespace ProjetoSGES\src\controller;
use ProjetoSGES\src\model\VO\EstagioVO;
use ProjetoSGES\src\model\DAO\EstagioDAO;

class EstagioController implements InterfacesController
{

    function index()
    {
        $estagios = EstagioDAO::findAll();
        require __DIR__ . "/../view/estagios/list.php";
    }

    function view()
    {
        $id = $_GET['id'];
        $estagio= EstagioDAO::findById($id);
        require __DIR__ . "/../view/estagios/view.php";

    }

    function create()
    {
        require __DIR__ . "/../view/estagios/create.php";
    }

    function edit()
    {
        $id = $_GET['id'];
        $estagio = EstagioDAO::findById($id);
        require __DIR__ . "/../view/estagios/edit.php";
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
        EstagioDAO::delete($id);
        session_start();
        $_SESSION['message'] = "Estágio excluída com sucesso!";
//        header("Location: /tarefas");
    }
}