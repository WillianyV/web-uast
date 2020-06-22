<?php


namespace ProjetoSGES\src\model\DAO;
require_once  "Connection.php";
use ProjetoSGES\src\model\VO\EmpresaVO;

class EmpresaDAO implements InterfacesDAO
{

    static function create($empresa)
    {
        $link = getConnection();
        $enderecoID = EnderecoDAO::findLastId();

        $vagas = $empresa->getVagas();
        $nome_empresa = $empresa->getNomeEmpresa();
        $CNPJ = $empresa->getCNPJ();
        $telefone = $empresa->getTelefone();
        $nome_proprietario = $empresa->getNomeProprietario();
        $nome_responsavel = $empresa->getNomeResponsavel();
        $CPF_proprietario = $empresa->getCPFProprietario();
        $CPF_responsavel = $empresa->getCPFResponsavel();
        $cursos = $empresa->getCurso()->getId();

        $link = getConnection();
        $query = "INSERT INTO empresas(nome, num_vagas, telefone, proprietario, responsavel, cpfResponsavel, cpfProprietario, cnpj, id_enderecos, id_cursos) VALUES ('{$nome_empresa}','{$vagas}','{$telefone}','{$nome_proprietario}','{$nome_responsavel}','{$CPF_responsavel}','{$CPF_proprietario}','{$CNPJ}','{$enderecoID}','{$cursos}')";
        $result = $link->query($query);
        $link->close();

        if(!$result){
            die ("Erro ao cadastrar Empresa " . mysqli_error());
        }
    }

    static function findAll()
    {
        $empresas = [];
        $link = getConnection();
        $query = "SELECT * FROM empresas";
        if($result = $link->query($query)){
            while($row = $result->fetch_row()){
                $empresas [] = new EmpresaVO($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10]);
            }
        }
        $link->close();
        return $empresas;
    }

    static function findById($id)
    {
        $link = getConnection();
        $query = "SELECT * FROM empresas WHERE id='{$id}'";
        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                return new EmpresaVO($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10]);
            }
        }
        $link->close();
        return null;
    }

    static function update($id, $empresa)
    {
        $vagas = $empresa->getVagas();
        $nome_empresa = $empresa->getNomeEmpresa();
        $CNPJ = $empresa->getCNPJ();
        $telefone = $empresa->getTelefone();
        $nome_proprietario = $empresa->getNomeProprietario();
        $nome_responsavel = $empresa->getNomeResponsavel();
        $CPF_proprietario = $empresa->getCPFProprietario();
        $CPF_responsavel = $empresa->getCPFResponsavel();
        $endereco = $empresa->getEndereco()->getId();
        $cursos = $empresa->getCurso()->getId();

        $link = getConnection();
        $query = "UPDATE empresas SET nome='{$nome_empresa}',num_vagas='{$vagas}',telefone='{$telefone}',proprietario='{$nome_proprietario}',responsavel='{$nome_responsavel}',cpfResponsavel='{$CPF_responsavel}',cpfProprietario='{$CPF_proprietario}',cnpj='{$CNPJ}',id_enderecos='{$endereco}',id_cursos='{$cursos}' WHERE id=$id";
        $link->query($query);
        $link->close();
    }

    static function delete($id)
    {
        $link = getConnection();
        $query = "DELETE FROM empresas WHERE id=$id";
        $link->query($query);
        $link->close();
    }
}