<?php


namespace ProjetoSGES\src\model\DAO;
require_once "Connection.php";

use ProjetoSGES\src\model\VO\CursoVO;

class ProfessorCursoDAO
{
    static function findByProfessorId($id){
        $link = getConnection();
        $query = "SELECT id_curso FROM professores_cursos WHERE id_professor='{$id}'";
        $cursos = [];
        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $curso [] = $row[0];
            }
        }
        $link->close();
        return $cursos;
    }

}