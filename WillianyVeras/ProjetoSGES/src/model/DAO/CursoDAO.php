<?php


namespace ProjetoSGES\src\model\DAO;
require_once  "Connection.php";
use ProjetoSGES\src\model\VO\CursoVO;

class CursoDAO implements InterfacesDAO
{

    static function create($curso)
    {

        $horas_estagio = $curso->getHorasEstagio();
        $nome = $curso->getNome();

        $link = getConnection();
        $sql_query = "INSERT INTO cursos (horas_estagio, nome) VALUES ('{$horas_estagio}','{$nome}')";
        $result = $link->query($sql_query);
        $link->close();

        if(!$result){
            die ("Erro ao cadastrar Curso " . mysqli_error());
        }
    }

    static function findAll()
    {
        $cursos = [];
        $link = getConnection();
        $sql_query = "SELECT * FROM cursos";

        if($result = $link->query($sql_query)){
            while($row = $result->fetch_row()){
                $cursos [] = new CursoVO($row[0],$row[1],$row[2]);
            }
        }

        $link->close();
        return $cursos;
    }

    static function findById($id)
    {
        $link = getConnection();

        $query = "SELECT * FROM cursos WHERE id='{$id}'";

        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                return new CursoVO($row[0], $row[1], $row[2]);
            }
        }
        $link->close();
        return null;
    }

    static function findByName($nome)
    {

        $link = getConnection();
        echo("DAO" . $nome);
        $query = "SELECT * FROM cursos WHERE nome='{$nome}'";

        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                return new CursoVO($row[0], $row[1], $row[2]);
            }
        }
        $link->close();
        return null;
    }

    static function update($id, $curso)
    {
        $horas_estagio = $curso->getHorasEstagio();
        $nome = $curso->getNome();
        $link = getConnection();
        $query = "UPDATE cursos SET horas_estagio='{$horas_estagio}',nome='{$nome}' WHERE id=$id";
        $link->query($query);
        $link->close();
    }

    static function delete($id)
    {
        $link = getConnection();
        $query = "DELETE FROM cursos WHERE id=$id";
        $link->query($query);
        $link->close();
    }
}