<?php


namespace ProjetoSGES\src\model\DAO;

require_once "Connection.php";

use ProjetoSGES\src\model\VO\AlunoVO;

class AlunosDao implements InterfacesDAO
{

    static function create($aluno)
    {

        $link = getConnection();
        $enderecoID = EnderecoDAO::findLastId();
        $curso = $aluno->getCurso()->getId();
        $sexo = $aluno->getSexo();
        $rg = $aluno->getRg();
        $cpf = $aluno->getCpf();
        $matricula = $aluno->getMatricula();
        $email = $aluno->getEmail();
        $data_nasc = $aluno->getDataNasc();

        $nome = $aluno->getNome();
        $login = $aluno->getLogin();
        $senha = $aluno->getSenha();

        $sql_query = "INSERT INTO alunos (nome, sexo, email, login, senha, rg, data_Nasc, cpf, matricula, id_enderecos, id_cursos) VALUES ('{$nome}','{$sexo}','{$email}','{$login}','{$senha}','{$rg}','{$data_nasc}','{$cpf}','{$matricula}','{$enderecoID}','{$curso}')";
        $result = $link->query($sql_query);
        $link->close();
        if (!$result){
            die("Erro ao cadastra Aluno: $nome" . mysqli_error());
        }


    }

    static function findAll()
    {
        $alunos = [];
        $link = getConnection();
        $sql_query = "SELECT * FROM alunos";
        if($result = $link->query($sql_query)){
            while($row = $result->fetch_row()){
                $alunos [] = new AlunoVO($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10],$row[11]);
            }
        }

        return $alunos;
    }

    static function findById($id)
    {
        $link = getConnection();
        $sql_query = "SELECT * FROM alunos WHERE id='{$id}'";

        if($result = $link->query($sql_query)){
            while ($row = $result->fetch_row()){
                return new AlunoVO($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10],$row[11]);
            }
        }

        $link->close();
        return null;
    }

    static function findLogin($login,$senha){
        $link = getConnection();
        $sql_query = "SELECT * FROM alunos WHERE login='{$login}' AND senha = '{$senha}' limit 1";

        if($result = $link->query($sql_query)){
            while ($row = $result->fetch_row()){
                return new AlunoVO($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10],$row[11]);
            }
        }

        $link->close();
        return null;
    }
    static function update($id, $aluno)
    {
        echo("dao aluno");
        echo var_dump($aluno);

         $endereco = $aluno->getEndereco();
        $curso = $aluno->getCurso()->getId();
        $sexo = $aluno->getSexo();
        $rg = $aluno->getRg();
        $cpf = $aluno->getCpf();
        $matricula = $aluno->getMatricula();
        $email = $aluno->getEmail();
        $data_nasc = $aluno->getDataNasc();
        $nome = $aluno->getNome();
        $login = $aluno->getLogin();
        $senha = $aluno->getSenha();

        $link = getConnection();

        $sql_query = "UPDATE alunos SET nome= '{$nome}',sexo='{$sexo}',email='{$email}',login='{$login}',senha='{$senha}',rg='{$rg}',data_Nasc='{$data_nasc}',cpf='{$cpf}',matricula='{$matricula}',id_enderecos='{$endereco}',id_cursos='{$curso}' WHERE id='{$id}'";

        $link->query($sql_query);
        $link->close();
    }

    static function delete($id)
    {
        $link = getConnection();
        $sql_query = "DELETE * FROM alunos WHERE id=$id";
        $link->query($sql_query);
        $link->close();
    }
}