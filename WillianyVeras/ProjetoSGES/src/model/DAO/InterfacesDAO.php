<?php


namespace ProjetoSGES\src\model\DAO;


interface InterfacesDAO
{
    static function create($dado);
    static function findAll();
    static function findById($id);
    static function update($id, $dado);
    static function delete($id);

}