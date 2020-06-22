<?php


namespace ProjetoSGES\src\model\DAO;
require_once  "Connection.php";
use ProjetoSGES\src\model\VO\CoordenacaoVO;

class CoordenacaoDAO implements InterfacesDAO
{

    static function create($coordenador)
    {
        $nome = $coordenador->getNome();
        $login = $coordenador->getLogin();
        $senha = $coordenador->getSenha();
        $cod_servidor = $coordenador->getCodigoServidor();

        $link = getConnection();
        $query = "INSERT INTO coordenacao(nome, login, senha, cod_servidor) VALUES ('{$nome}','{$login}','{$senha}','{$cod_servidor}')";
        $result = $link->query($query);
        $link->close();
        if(!$result){
            die ("Erro ao cadastrar Coordenador" . mysqli_error());
        }

    }

    static function findAll()
    {
        $cordenacao = [];
        $link = getConnection();
        $query = "SELECT * FROM coordenacao";
        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $cordenacao [] = new CoordenacaoVO($row[0], $row[1],$row[2],$row[3],$row[4]);
            }
        }
        $link->close();
        return $cordenacao;
    }

    static function findById($id)
    {
        $link = getConnection();
        $query ="SELECT * FROM coordenacao WHERE id='{$id}'";
        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                return new CoordenacaoVO($row[0], $row[1],$row[2],$row[3],$row[4]);
            }
        }
        $link->close();
        return null;
    }

    static function findLogin($login,$senha){
        $link = getConnection();
        $query ="SELECT * FROM coordenacao WHERE login='{$login}' AND senha = '{$senha}' limit 1";
        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                return new CoordenacaoVO($row[0],$row[1],$row[2],$row[3],$row[4]);
            }
        }
        $link->close();
        return null;
    }

    static function update($id, $coordenador)
    {
        $nome = $coordenador->getNome();
        $login = $coordenador->getLogin();
        $senha = $coordenador->getSenha();
        $codigo_servidor = $coordenador->getCodigoServidor();

        $link = getConnection();
        $query = "UPDATE coordenacao SET nome='{$nome}',login='{$login}',senha='{$senha}',cod_servidor='{$codigo_servidor}' WHERE id=$id";
        $link->query($query);
        $link->close();
    }

    static function delete($id)
    {
        $link = getConnection();
        $query = "DELETE FROM coordenacao WHERE id=$id";
        $link->query($query);
        $link->close();
    }
}