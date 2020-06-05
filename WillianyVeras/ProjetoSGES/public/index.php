<?php

require __DIR__ . "/../autoload.php";

//IMPORTANDO CONTROLADORES
use ProjetoSGES\src\controller\AlunoController;

//SERVIDOR
$caminho = $_SERVER["PATH_INFO"];
$metodo = $_SERVER["REQUEST_METHOD"];

//ROTAS
switch($caminho){
    case "/aluno":
        $controller = new AlunoController();
        metodo($metodo,$controller);
        break;

    case "/professor":
        break;

    case "/empresa":
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