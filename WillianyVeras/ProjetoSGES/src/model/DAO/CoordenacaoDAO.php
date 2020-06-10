<?php


namespace ProjetoSGES\src\model\DAO;
require "Connection.php";
use ProjetoSGES\src\model\VO\CoordenacaoVO;

class CoordenacaoDAO implements InterfacesDAO
{

    static function create($dado)
    {
        $nome = $dado->getNome();
        $login = $dado->getLogin();
        $senha = $dado->getSenha();
        $cod_servidor = $dado->getCodigoServidor();

        $link = getConnection();
        $sql_query = "INSERT INTO `coordenacao`( `nome`, `login`, `senha`, `cod_servidor`) VALUES ('{$nome}','{$login}','{$senha}','{$cod_servidor}')";
        $result = $link->query($sql_query);
        $link->close();

        if(!$result){
            die ("Erro ao cadastrar Coordenador" . mysqli_error());
        }
    }

    static function findAll()
    {
        // TODO: Implement findAll() method.
    }

    static function findById($id)
    {
        // TODO: Implement findById() method.
    }

    static function update($id, $dado)
    {
        // TODO: Implement update() method.
    }

    static function delete($id)
    {
        // TODO: Implement delete() method.
    }
}