<?php


namespace ProjetoSGES\src\model\DAO;
require_once "Connection.php";

use mysql_xdevapi\Result;
use ProjetoSGES\src\model\VO\CursoVO;
use ProjetoSGES\src\model\VO\EnderecoVO;

class EnderecoDAO implements InterfacesDAO
{

    static function create($endereco)
    {
        $numero = $endereco->getNumero();
        $rua = $endereco->getRua();
        $bairro = $endereco->getbairro();
        $cidade = $endereco->getCidade();
        $uf = $endereco->getUf();
        $cep =$endereco->getCep();

        $link = getConnection();
        $sql_query = "INSERT INTO enderecos(rua, numero, cidade, uf, cep, bairro) VALUES ('{$rua}','{$numero}','{$cidade}','{$uf}','{$cep}','{$bairro}')";
        $result = $link->query($sql_query);
        $link->close();

        if (!$result){
            die("Erro ao cadastrar endereco" . mysqli_connect_error());
        }

    }

    static function findAll()
    {
        // TODO: Implement findAll() method.
    }

    static function findById($id)
    {
        $link = getConnection();

        $query = "SELECT * FROM enderecos WHERE id='{$id}'";

        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                return new EnderecoVO($row[0], $row[1], $row[2],$row[3],$row[4],$row[5],$row[6]);
            }
        }
        $link->close();
        return null;
    }

    static function findLastId()
    {
        $link = getConnection();
        $queryUltimoId = "SELECT id FROM enderecos ORDER BY id DESC limit 1";
        $enderecoID = 0;
        if($result= $link->query($queryUltimoId)){
            while($row = $result->fetch_row()){
                $enderecoID = $row[0];
            }
        }
        $link->close();
        return $enderecoID;
    }

    static function update($id, $endereco)
    {
        $rua = $endereco->getRua();
        $numero = $endereco->getNumero();
        $cidade = $endereco->getCidade();
        $uf = $endereco->getUf();
        $cep = $endereco->getCep();
        $bairro = $endereco->getBairro();

        $link = getConnection();
        $query = "UPDATE enderecos SET rua='{$rua}',numero='{$numero}',cidade='{$cidade}',uf='{$uf}',cep='{$cep}',bairro='{$bairro}' WHERE id=$id";
        $link->query($query);
        $link->close();
    }

    static function delete($id)
    {
        $link = getConnection();
        $sql_query = "DELETE FROM enderecos WHERE id=$id";
        $link->query($sql_query);
        $link->close();
    }
}