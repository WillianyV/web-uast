<?php


namespace ProjetoSGES\src\model\DAO;

require "Connection.php";

use ProjetoSGES\src\model\VO\AlunoVO;

class AlunosDao implements InterfacesDAO
{

    static function create($dado)
    {
        // TODO: Implement create() method.
    }

    static function findAll()
    {
        $alunos = [];
        $link = getConnection();
        $query = "select * from alunos";
        if($result = $link->query($query)){
            while($row = $result->fetch_row()){
//                $alunos [] = new AlunoVO();
            }
        }
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
        $link = getConnection();
        $sql_query = "delete from alunos where id=$id";
        $link->query($sql_query);
        $link->close();
    }
}