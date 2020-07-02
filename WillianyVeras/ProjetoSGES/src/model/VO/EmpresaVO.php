<?php


namespace ProjetoSGES\src\model\VO;
use ProjetoSGES\src\model\DAO\EnderecoVO;
use ProjetoSGES\src\model\DAO\CursoVO;

class EmpresaVO
{
    private $id,$vagas,$nome_empresa,$CNPJ,$telefone,$nome_proprietario,
        $nome_responsavel, $CPF_proprietario,$CPF_responsavel,$endereco,$curso;
//    private $endereco = EnderecoVO;
//    private $curso = CursoVO;

    /**
     * EmpresaVO constructor.
     * @param $id
     * @param $vagas
     * @param $nome_empresa
     * @param $CNPJ
     * @param $telefone
     * @param $nome_proprietario
     * @param $nome_responsavel
     * @param $CPF_proprietario
     * @param $CPF_responsavel
     * @param $endereco
     * @param $curso
     */
    public function __construct($id, $nome_empresa, $vagas, $telefone, $nome_proprietario, $nome_responsavel, $CPF_responsavel, $CPF_proprietario, $CNPJ, $endereco, $curso)
    {
        $this->id = $id;
        $this->vagas = $vagas;
        $this->nome_empresa = $nome_empresa;
        $this->CNPJ = $CNPJ;
        $this->telefone = $telefone;
        $this->nome_proprietario = $nome_proprietario;
        $this->nome_responsavel = $nome_responsavel;
        $this->CPF_proprietario = $CPF_proprietario;
        $this->CPF_responsavel = $CPF_responsavel;
        $this->endereco = $endereco;
        $this->curso = $curso;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getVagas()
    {
        return $this->vagas;
    }

    /**
     * @param mixed $vagas
     */
    public function setVagas($vagas)
    {
        $this->vagas = $vagas;
    }

    /**
     * @return mixed
     */
    public function getNomeEmpresa()
    {
        return $this->nome_empresa;
    }

    /**
     * @param mixed $nome_empresa
     */
    public function setNomeEmpresa($nome_empresa)
    {
        $this->nome_empresa = $nome_empresa;
    }

    /**
     * @return mixed
     */
    public function getCNPJ()
    {
        return $this->CNPJ;
    }

    /**
     * @param mixed $CNPJ
     */
    public function setCNPJ($CNPJ)
    {
        $this->CNPJ = $CNPJ;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getNomeProprietario()
    {
        return $this->nome_proprietario;
    }

    /**
     * @param mixed $nome_proprietario
     */
    public function setNomeProprietario($nome_proprietario)
    {
        $this->nome_proprietario = $nome_proprietario;
    }

    /**
     * @return mixed
     */
    public function getNomeResponsavel()
    {
        return $this->nome_responsavel;
    }

    /**
     * @param mixed $nome_responsavel
     */
    public function setNomeResponsavel($nome_responsavel)
    {
        $this->nome_responsavel = $nome_responsavel;
    }

    /**
     * @return mixed
     */
    public function getCPFProprietario()
    {
        return $this->CPF_proprietario;
    }

    /**
     * @param mixed $CPF_proprietario
     */
    public function setCPFProprietario($CPF_proprietario)
    {
        $this->CPF_proprietario = $CPF_proprietario;
    }

    /**
     * @return mixed
     */
    public function getCPFResponsavel()
    {
        return $this->CPF_responsavel;
    }

    /**
     * @param mixed $CPF_responsavel
     */
    public function setCPFResponsavel($CPF_responsavel)
    {
        $this->CPF_responsavel = $CPF_responsavel;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * @param mixed $curso
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;
    }

}