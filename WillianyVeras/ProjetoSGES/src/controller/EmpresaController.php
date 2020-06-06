<?php


namespace ProjetoSGES\src\controller;
use ProjetoSGES\src\model\VO\EmpresaVO;
use ProjetoSGES\src\model\DAO\EmpresaDAO;

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
        // TODO: Implement store() method.
    }

    function update()
    {
        // TODO: Implement update() method.
    }

    function delete()
    {
        $id = $_GET['id'];
        EmpresaDAO::delete($id);
        session_start();
        $_SESSION['message'] = "Empresa excluída com sucesso!";
//        header("Location: /tarefas");
    }
}