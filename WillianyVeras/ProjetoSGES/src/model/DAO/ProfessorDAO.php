<?php


namespace ProjetoSGES\src\model\DAO;
require_once "Connection.php";

use  ProjetoSGES\src\model\VO\ProfessorVO;

class ProfessorDAO implements InterfacesDAO
{

    static function create($professor)
    {
        $nome = $professor->getNome();
        $login = $professor->getLogin();
        $senha = $professor->getSenha();

        $vagas_orientados = $professor->getVagasOrientados();
        $cod_servidor = $professor->getCodServidor();
        $cursos = $professor->getCursos();

        $link = getConnection();
        //TABELA PROFESSOR
        $query = "INSERT INTO professores(nome, vagas_orientandos, login, senha, cod_servidor) VALUES ('{$nome}','{$vagas_orientados}','{$login}','{$senha}','{$cod_servidor}')";
        $result = $link->query($query);

        //TABELA PROFESSOR_CURSO
        $lastId = self::findLastId();
        foreach ($cursos as $c) {
            $cursoId = $c->getId();
            $sql_query = "INSERT INTO professores_cursos(id_professor, id_curso) VALUES ('{$lastId}','{$cursoId}')";
            $result2 = $link->query($sql_query);
            if (!$result2) {
                die ("Erro ao cadastrar o Curso do Professor " . mysqli_error());
            }
        }

        $link->close();
        if (!$result) {
            die ("Erro ao cadastrar Professor " . mysqli_error());
        }
    }

    static function findAll()
    {
        $prodessores = [];
        $link = getConnection();
        $query = "SELECT * FROM professores";
        if($result = $link->query($query)){
            while($row = $result->fetch_row()){
                $cursosId = ProfessorCursoDAO::findByProfessorId($row[0]);
                $cursos = [];
                foreach ($cursosId as $id){
                    $cursos [] = CursoDAO::findById($id);
                }
                $prodessores [] = new ProfessorVO($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$cursos);
            }

        }
        $link->close();
        return $prodessores;
    }

    static function findById($id)
    {
        $link = getConnection();

        $query = "SELECT * FROM professores WHERE id='{$id}'";

        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){

                $cursosId = ProfessorCursoDAO::findByProfessorId($row[0]);
                $cursos = [];
                foreach ($cursosId as $id){
                    $cursos [] = CursoDAO::findById($id);
                }

                return new ProfessorVO($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$cursos);
            }
        }
        $link->close();
        return null;
    }

    static function findLastId()
    {
        $link = getConnection();
        $queryUltimoId = "SELECT id FROM professores ORDER BY id DESC limit 1";
        $ultimoID = 0;
        if ($result = $link->query($queryUltimoId)) {
            while ($row = $result->fetch_row()) {
                $ultimoID = $row[0];
            }
        }
        $link->close();
        return $ultimoID;
    }

    static function findLogin($login,$senha)
    {
        $link = getConnection();

        $query = "SELECT * FROM professores WHERE login='{$login}' AND senha='{$senha}' limit 1";

        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){

                $cursosId = ProfessorCursoDAO::findByProfessorId($row[0]);
                $cursos = [];
                foreach ($cursosId as $id){
                    $cursos [] = CursoDAO::findById($id);
                }

                return new ProfessorVO($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$cursos);
            }
        }
        $link->close();
        return null;
    }

    static function update($id, $professor)
    {
        $nome = $professor->getNome();
        $login = $professor->getLogin();
        $senha = $professor->getSenha();

        $vagas_orientados = $professor->getVagasOrientados();
        $cod_servidor = $professor->getCodServidor();
        $cursos = $professor->getCursos();

        $link = getConnection();
        $query = "UPDATE professores SET nome='{$nome}',vagas_orientandos='{$vagas_orientados}',login='{$login}',senha='{$senha}',cod_servidor='{$cod_servidor}' WHERE id=$id";
        $link->query($query);


        foreach ($cursos as $c) {
            $cursoId = $c;
            $sql_query = "UPDATE professores_cursos SET id_professor='{$id}',id_curso ='{$cursoId}' WHERE id_professor=$id";;
            $result2 = $link->query($sql_query);
            if (!$result2) {
                die ("Erro ao cadastrar o Curso do Professor " . mysqli_error());
            }
        }

        $link->close();
    }

    static function delete($id)
    {
        $link = getConnection();
        $query = "DELETE FROM professores WHERE id=$id";
        $query2 = "DELETE FROM professores_cursos WHERE id_professor=$id";
        $link->query($query2);
        $link->query($query);
        $link->close();
    }
}