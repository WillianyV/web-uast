<?php


namespace ProjetoSGES\src\controller;
use ProjetoSGES\src\model\DAO\CursoDAO;
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
        $nome = $_POST['nome'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $vagas_orientados = $_POST['vagas_orientados'];
        $cod_servidor = $_POST['cod_servidor'];
        $selecionados = $_POST['cursos'];
        $cursos = [];

        foreach ($selecionados as $c){
            $cursos [] = CursoDAO::findById($c);
        }

        $professor = new ProfessorVO(null,$nome,$login,$senha,$vagas_orientados,$cod_servidor,$cursos);
        ProfessorDAO::create($professor);
    }

    function update()
    {
        $id = $_GET['id'];
        $nome = $_POST['nome'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $vagas_orientados = $_POST['vagas_orientados'];
        $cod_servidor = $_POST['cod_servidor'];
        $selecionados = $_POST['cursos'];
        $cursos = [];

        foreach ($selecionados as $c){
            array_push($cursos,$c);
        }

        $professor = new ProfessorVO(null,$nome,$login,$senha,$vagas_orientados,$cod_servidor,$cursos);
        ProfessorDAO::update($id,$professor);
    }

    function delete()
    {
        $id = $_GET['id'];
        ProfessorDAO::delete($id);
    }
}