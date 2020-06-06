<?php


namespace ProjetoSGES\src\controller;
use ProjetoSGES\src\model\VO\CoordenacaoVO;
use ProjetoSGES\src\model\DAO\CoordenacaoDAO;

class CoordencaoController implements InterfacesController
{

    function index()
    {
        $coordenacao = CoordenacaoDAO::findAll();
        require __DIR__ . "/../view/coordenacao/list.php";
    }

    function view()
    {
        $id = $_GET['id'];
        $coordenacao = CoordenacaoDAO::findById($id);
        require __DIR__ . "/../view/coordenacao/view.php";
    }

    function create()
    {
        require __DIR__ . "/../view/coordenacao/create.php";
    }

    function edit()
    {
        $id = $_GET['id'];
        $coordenacao  = CoordenacaoDAO::findById($id);
        require __DIR__ . "/../view/coordenacao/edit.php";
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
        CoordenacaoDAO::delete($id);
        $_SESSION['message'] = "Coordenador excluído com sucesso";
    }
}