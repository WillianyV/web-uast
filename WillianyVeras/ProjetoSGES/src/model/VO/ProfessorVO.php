<?php


namespace ProjetoSGES\src\model\VO;
use ProjetoSGES\src\model\VO\UsuarioVO;
use ProjetoSGES\src\model\DAO\CursoVO;


class ProfessorVO extends UsuarioVO
{
    private $id, $vagas_orientados, $cod_servidor;
    private $cursos = array(CursoVO::class); // perguntar a professor

//    private $cursos[] = CursoVO;

    /**
     * ProfessorVO constructor.
     * @param $id
     * @param $vagas_orientados
     * @param $cod_servidor
     * @param string[] $cursos
     */
    public function __construct($id, $vagas_orientados, $cod_servidor, array $cursos)
    {
        $this->id = $id;
        $this->vagas_orientados = $vagas_orientados;
        $this->cod_servidor = $cod_servidor;
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
     * @return string[]
     */
    public function getCursos()
    {
        return $this->cursos;
    }

    /**
     * @param string[] $cursos
     */
    public function setCursos($cursos)
    {
        $this->cursos = $cursos;
    }

}