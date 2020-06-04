<?php


namespace ProjetoSGES\src\model\VO;
use ProjetoSGES\src\model\DAO\UsuarioVO;
use ProjetoSGES\src\model\DAO\EnderecoVO;
use ProjetoSGES\src\model\DAO\CursoVO;

class AlunoVO extends UsuarioVO
{
    private $sexo, $rg, $cpf, $matricula, $email, $data_nasc;
    private $endereco = EnderecoVO;
    private $curso = CursoVO;

    /**
     * AlunoVO constructor.
     * @param $sexo
     * @param $rg
     * @param $cpf
     * @param $matricula
     * @param $email
     * @param $data_nasc
     * @param $endereco
     * @param $curso
     */
    public function __construct($sexo, $rg, $cpf, $matricula, $email, $data_nasc, $endereco, $curso)
    {
        $this->sexo = $sexo;
        $this->rg = $rg;
        $this->cpf = $cpf;
        $this->matricula = $matricula;
        $this->email = $email;
        $this->data_nasc = $data_nasc;
        $this->endereco = $endereco;
        $this->curso = $curso;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return mixed
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * @param mixed $rg
     */
    public function setRg($rg)
    {
        $this->rg = $rg;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param mixed $matricula
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getDataNasc()
    {
        return $this->data_nasc;
    }

    /**
     * @param mixed $data_nasc
     */
    public function setDataNasc($data_nasc)
    {
        $this->data_nasc = $data_nasc;
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