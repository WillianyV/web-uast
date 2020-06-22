<?php
use ProjetoSGES\src\model\DAO\AlunosDao;
use ProjetoSGES\src\model\DAO\ProfessorDAO;
use ProjetoSGES\src\model\DAO\CoordenacaoDAO;

session_start();

if (isset($_POST["usuario"])){
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $aluno = AlunosDao::findLogin($usuario,$senha);
    $professor =ProfessorDAO::findLogin($senha,$senha);
    $coordenador = CoordenacaoDAO::findLogin($usuario,$senha);

    if(!(empty($aluno))){

        $_SESSION["user_logado"] = $aluno->getId();
        // ir home aluno
        //header("Location: index.php");
    }else if(!(empty($professor))){
        $_SESSION["user_logado"] = $professor->getId();
        //ir home professor
        //header("Location: index.php");
    }else if(!(empty($coordenador))){
        $_SESSION["user_logado"] = $coordenador->getId();
        //ir home coordenador
        //header("Location: index.php");
    }else{
        $_SESSION['message'] = "Senha Inválida";
    }
}