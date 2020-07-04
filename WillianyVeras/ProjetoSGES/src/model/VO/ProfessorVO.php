<?php


namespace ProjetoSGES\src\model\VO;
use ProjetoSGES\src\model\VO\UsuarioVO;
use ProjetoSGES\src\model\DAO\CursoVO;
use ProjetoSGES\src\model\VO\AlunoVO;


class ProfessorVO extends UsuarioVO
{

    private $vagas_orientados, $cod_servidor;
    private $cursos = [];

    /**
     * ProfessorVO constructor.
     * @param $vagas_orientados
     * @param $cod_servidor
     * @param array $cursos
     */
    public function __construct($id, $nome,$vagas_orientados, $login, $senha,$cod_servidor, array $cursos)
    {
        parent::__construct($id, $nome, $login, $senha);
        $this->vagas_orientados = $vagas_orientados;
        $this->cod_servidor = $cod_servidor;
        $this->cursos = $cursos;
    }

    /**
     * @return mixed
     */
    public function getVagasOrientados()
    {
        return $this->vagas_orientados;
    }

    /**
     * @param mixed $vagas_orientados
     */
    public function setVagasOrientados($vagas_orientados)
    {
        $this->vagas_orientados = $vagas_orientados;
    }

    /**
     * @return mixed
     */
    public function getCodServidor()
    {
        return $this->cod_servidor;
    }

    /**
     * @param mixed $cod_servidor
     */
    public function setCodServidor($cod_servidor)
    {
        $this->cod_servidor = $cod_servidor;
    }

    /**
     * @return array
     */
    public function getCursos()
    {
        return $this->cursos;
    }

    /**
     * @param array $cursos
     */
    public function setCursos($cursos)
    {
        $this->cursos = $cursos;
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