<?php


namespace ProjetoSGES\src\controller;


use ProjetoSGES\src\model\DAO\UsuarioDAO;

class LoginController
{
    function index()
    {
        require __DIR__ . "/../view/login/login.php";
    }

    function login(){
        $usuario = $_POST['usuario'];
        $senha= $_POST['senha'];
        UsuarioDAO::login($usuario,$senha);
    }
}