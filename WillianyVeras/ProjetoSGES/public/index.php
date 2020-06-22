<?php

require __DIR__ . "/../autoload.php";


use ProjetoSGES\src\controller\AlunoController;
use ProjetoSGES\src\controller\CursoController;
use ProjetoSGES\src\controller\CoordencaoController;
use ProjetoSGES\src\controller\EmpresaController;
use ProjetoSGES\src\controller\EstagioController;
use ProjetoSGES\src\controller\LoginController;
use ProjetoSGES\src\controller\ProfessorController;
use ProjetoSGES\src\controller\HomeCoordenacaoController;

$caminho = $_SERVER["PATH_INFO"]; // com erro
$metodo = $_SERVER["REQUEST_METHOD"];

if ($metodo == "POST"){
    if(isset($_POST['_method'])){
        $metodo = $_POST['_method'];
    }
}

//ROTAS
switch($caminho){
    case "/alunos":
        $controller = new AlunoController();
        metodo($metodo,$controller);
        break;

    case "/login":
        $controller = new LoginController();
        metodo($metodo,$controller);
        break;

    case "/cursos":
        $controller = new CursoController();
        metodo($metodo, $controller);
        break;

    case "/coordenacao":
        $controller = new CoordencaoController();
        metodo($metodo,$controller);
        break;

    case "/empresas":
        $controller = new EmpresaController();
        metodo($metodo,$controller);
        break;
        
    case "/estagios":
        $controller = new EstagioController();
        metodo($metodo,$controller);
        break;

    case "/professores":
        $controller = new ProfessorController();
        metodo($metodo,$controller);
        break;

    case "/home-coordenacao":
        $controller = new HomeCoordenacaoController();
        metodo($metodo,$controller);
        break;

    case "":
        break;

    default:
        echo "Erro 404";
        break;
}

function metodo($metodo, $controller){
    switch ($metodo){
        case "POST":
            $controller->store(); //Salvar
            break;
        case "PUT":
            $controller->update();//Editar
            break;
        case "GET":
            if(isset($_GET['action'])){
                if (isset($_GET['id'])){
                    $controller->edit(); // tela de visualizar para editar
                }else{
                    $controller->create(); //tela de criar
                }
            }else{
                if (isset($_GET['id'])){
                    $controller->view(); // find by id
                }else{
                    $controller->index(); //find all
                }
            }
            break;
        case "DELETE":
            $controller->delete();
            break;
    }
}