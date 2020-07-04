<?php

namespace ProjetoSGES\src\model\DAO;

session_start();

class UsuarioDAO
{
    static function login($usuario,$senha){

        $aluno = AlunosDao::findLogin($usuario,$senha);
        $professor =ProfessorDAO::findLogin($senha,$senha);
        $coordenador = CoordenacaoDAO::findLogin($usuario,$senha);

        if(!(empty($aluno))){
            $_SESSION["user_logado"] = $aluno->getId();
            header("location:/home-aluno");
        }else if(!(empty($professor))){
            $_SESSION["user_logado"] = $professor->getId();
            header("location:/home-professor");
        }else if(!(empty($coordenador))){
            $_SESSION["user_logado"] = $coordenador->getId();
            header("location:/home-coordenacao");
        }else{
            $_SESSION['message'] = "Senha Inválida";
        }
    }
}