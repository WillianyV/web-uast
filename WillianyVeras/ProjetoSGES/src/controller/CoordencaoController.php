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
        $coordenador = CoordenacaoDAO::findById($id);
        require __DIR__ . "/../view/coordenacao/view.php";
    }

    function create()
    {
        require __DIR__ . "/../view/coordenacao/create.php";
    }

    function edit()
    {
        $id = $_GET['id'];
        $coordenador  = CoordenacaoDAO::findById($id);
        require __DIR__ . "/../view/coordenacao/edit.php";
    }

    function store()
    {
        $nome = $_POST['nome'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $cod_servidor = $_POST['cod_servidor'];

        $coordenadorVO = new CoordenacaoVO(null,$nome,$login,$senha,$cod_servidor);
        CoordenacaoDAO::create($coordenadorVO);
    }

    function update()
    {
        $id = $_GET['id'];
        $nome = $_POST['nome'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $cod_servidor = $_POST['cod_servidor'];
        $coordenador = new CoordenacaoVO(null,$nome,$login,$senha,$cod_servidor);
        CoordenacaoDAO::update($id,$coordenador);
    }

    function delete()
    {
        $id = $_GET['id'];
        CoordenacaoDAO::delete($id);
    }
}