<?php


namespace ProjetoSGES\src\controller;
use ProjetoSGES\src\model\DAO\Util;
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
        $matricula = $_POST['matricula'];
        $numero_seguro = $_POST['numero_seguro'];
        $turno = $_POST['turno'];
        $curso = $_POST['curso'];
        $empresa = $_POST['empresa'];
        $professor = $_POST['professor'];
        $aluno = Util::$usuarioLogado->getId();
        $status = "Solicitado";
        $estagio = new EstagioVO(null,$numero_seguro,$status,$matricula,$turno,null,null,$professor,$curso,$aluno,$empresa);
        EstagioDAO::create($estagio);
    }

    function update()
    {
        $id = $_GET['id'];
        $matricula = $_POST['matricula'];
        $numero_seguro = $_POST['numero_seguro'];
        $turno = $_POST['turno'];
        $curso = $_POST['curso'];
        $empresa = $_POST['empresa'];
        $professor = $_POST['professor'];
        $aluno = $_POST['aluno'];
        $status = $_POST['status'];
        $data_fim_estagio = $_POST['data_fim_estagio'];
        $data_inicio_estagio = $_POST['data_inicio_estagio'];
        $estagio = new EstagioVO(null,$numero_seguro,$status,$matricula,$turno,$data_inicio_estagio,$data_fim_estagio,$professor,$curso,$aluno,$empresa);
        EstagioDAO::update($id,$estagio);
    }

    function delete()
    {
        $id = $_GET['id'];
        EstagioDAO::delete($id);
    }
}