<?php


namespace ProjetoSGES\src\model\VO;

use ProjetoSGES\src\model\VO\UsuarioVO;

class CoordenacaoVO extends UsuarioVO
{
    private $codigo_servidor;

    /**
     * CoordenacaoVO constructor.
     * @param $codigo_servidor
     */
    public function __construct($id, $nome, $login, $senha, $codigo_servidor)
    {
        parent::__construct($id, $nome, $login, $senha);
        $this->codigo_servidor = $codigo_servidor;
    }

    /**
     * @return mixed
     */
    public function getCodigoServidor()
    {
        return $this->codigo_servidor;
    }

    /**
     * @param mixed $codigo_servidor
     */
    public function setCodigoServidor($codigo_servidor)
    {
        $this->codigo_servidor = $codigo_servidor;
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
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

}