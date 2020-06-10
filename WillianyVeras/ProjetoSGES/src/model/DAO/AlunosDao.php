<?php


namespace ProjetoSGES\src\model\DAO;

require "Connection.php";

use ProjetoSGES\src\model\VO\AlunoVO;
use ProjetoSGES\src\model\VO\EnderecoVO;

class AlunosDao implements InterfacesDAO
{

    static function create($aluno)
    {
        $enderecoVO = $aluno->getEndereco();
        EnderecoDAO::create($enderecoVO);
        $link = getConnection();
        $queryUltimoId = "SELECT id FROM enderecos ORDER BY id DESC limit 1";
        $resultUltimoId = $link->query($queryUltimoId);
        if(!$resultUltimoId){
            die(mysqli_error());
        }
        $aluno->getEndereco()->setId($resultUltimoId);

        $endereco = $aluno->getEndereco()->getId();
        $curso = $aluno->getCurso()->getId;
        $sexo = $aluno->getSexo();
        $rg = $aluno->getRg();
        $cpf = $aluno->getCpf();
        $matricula = $aluno->getMatricula();
        $email = $aluno->getEmail();
        $data_nasc = $aluno->getDataNasc();

        $nome = $aluno->getNome();
        $login = $aluno->getLogin();
        $senha = $aluno->getSenha();

        $sql_query = "INSERT INTO alunos (nome, sexo, email, login, senha, rg, data_Nasc, cpf, matricula, id_enderecos, id_cursos) VALUES 
                        ('{$nome}','{$sexo}','{$email}','{$login}','{$senha}','{$rg}','{$data_nasc}','{$cpf}','{$matricula}','{$endereco}','{$curso}')";
        $result = $link->query($sql_query);
        $link->close();
        if (!$result){
            echo mysqli_error();
            exit(0);
        }


    }

    static function findAll()
    {
        $alunos = [];
        $link = getConnection();
        $sql_query = "SELECT id,nome,cpf,id_cursos FROM alunos";
        if($result = $link->query($sql_query)){
            while($row = $result->fetch_row()){
                $alunos [] = new AlunoVO($row[0], $row[1], $row[2],$row[3]);
            }
        }
    }

    static function findById($id)
    {
        $link = getConnection();
        $sql_query = "SELECT id,nome,cpf,id_cursos FROM alunos WHERE id=$id";

        if($result = $link->query($sql_query)){
            while ($row = $result->fetch_row()){
                return new AlunoVO($row[0],$row[1],$row[2],$row[3]);
            }
        }

        $link->close();
        return null;
    }

    static function update($id, $aluno)
    {
        $endereco = $aluno->getEndereco()->getId();
        $curso = $aluno->getCurso()->getId;
        $sexo = $aluno->getSexo();
        $rg = $aluno->getRg();
        $cpf = $aluno->getCpf();
        $matricula = $aluno->getMatricula();
        $email = $aluno->getEmail();
        $data_nasc = $aluno->getDataNasc();

        $nome = $aluno->getNome();
        $login = $aluno->getLogin();
        $senha = $aluno->getSenha();

        $enderecoVO = $aluno->getEndereco();
        $rua = $enderecoVO->getRua();
        $numero = $enderecoVO->getNumero();
        $cidade = $enderecoVO->getCidade();
        $uf = $enderecoVO->getUf();
        $cep = $enderecoVO->getCep();
        $bairro = $enderecoVO->getBairro();

        $link = getConnection();

        $endereco_query = "UPDATE enderecos SET rua='{$rua}',numero='{$numero}',cidade='{$cidade}',
                            uf='{$uf}',cep='{$cep}',bairro='{$bairro}' WHERE id=$endereco";

        $resultEndereco  = $link->query($endereco_query);

        if(!$resultEndereco){
            die("Erro ao atualizar endereco" . mysqli_error());
        }

        $sql_query = "UPDATE alunos SET nome= '{$nome}',sexo='{$sexo}',email='{$email}',login='{$login}',senha='{$senha}',
                        rg='{$rg}',data_Nasc='{$data_nasc}',cpf='{$cpf}',matricula='{matricula}',id_enderecos='{$endereco}',
                        id_cursos='{$curso}' WHERE id=$id";

        $result = $link->query($sql_query);

        if($result){
            die("Erro ao Atualizar Aluno " . mysqli_error());
        }

        $link->close();
    }

    static function delete($id)
    {
        $link = getConnection();
        $sql_query = "DELETE FROM alunos WHERE id=$id";
        $link->query($sql_query);
        $link->close();
    }
}