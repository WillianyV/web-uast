<?php


namespace ProjetoSGES\src\model\DAO;
require "Connection.php";
use ProjetoSGES\src\model\VO\CoordenacaoVO;

class CoordenacaoDAO implements InterfacesDAO
{

    static function create($dado)
    {
        $name = $dado->getNome();
        $login = $dado->getLogin();
        $senha = $dado->getSenha();
        $cod_servidor = $dado->getCodigoServidor();
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