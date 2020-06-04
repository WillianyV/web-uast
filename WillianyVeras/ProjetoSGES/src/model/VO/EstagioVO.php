<?php


namespace ProjetoSGES\src\model\VO;
use ProjetoSGES\src\model\VO\ProfessorVO;
use ProjetoSGES\src\model\VO\CursoVO;
use ProjetoSGES\src\model\VO\AlunoVO;
use ProjetoSGES\src\model\VO\EmpresaVO;


class EstagioVO
{
    private $id, $numero_seguro, $status, $matricula, $turno, $data_inicio_estagio, $data_fim_estagio;
    private $professor = ProfessorVO;
    private $curso = CursoVO;
    private $aluno = AlunoVO;
    private $empresa = EmpresVO;

    /**
     * EstagioVO constructor.
     * @param $id
     * @param $numero_seguro
     * @param $status
     * @param $matricula
     * @param $turno
     * @param $data_inicio_estagio
     * @param $data_fim_estagio
     * @param $professor
     * @param $curso
     * @param $aluno
     * @param $empresa
     */
    public function __construct($id, $numero_seguro, $status, $matricula, $turno, $data_inicio_estagio, $data_fim_estagio, $professor, $curso, $aluno, $empresa)
    {
        $this->id = $id;
        $this->numero_seguro = $numero_seguro;
        $this->status = $status;
        $this->matricula = $matricula;
        $this->turno = $turno;
        $this->data_inicio_estagio = $data_inicio_estagio;
        $this->data_fim_estagio = $data_fim_estagio;
        $this->professor = $professor;
        $this->curso = $curso;
        $this->aluno = $aluno;
        $this->empresa = $empresa;
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
    public function getNumeroSeguro()
    {
        return $this->numero_seguro;
    }

    /**
     * @param mixed $numero_seguro
     */
    public function setNumeroSeguro($numero_seguro)
    {
        $this->numero_seguro = $numero_seguro;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
    public function getTurno()
    {
        return $this->turno;
    }

    /**
     * @param mixed $turno
     */
    public function setTurno($turno)
    {
        $this->turno = $turno;
    }

    /**
     * @return mixed
     */
    public function getDataInicioEstagio()
    {
        return $this->data_inicio_estagio;
    }

    /**
     * @param mixed $data_inicio_estagio
     */
    public function setDataInicioEstagio($data_inicio_estagio)
    {
        $this->data_inicio_estagio = $data_inicio_estagio;
    }

    /**
     * @return mixed
     */
    public function getDataFimEstagio()
    {
        return $this->data_fim_estagio;
    }

    /**
     * @param mixed $data_fim_estagio
     */
    public function setDataFimEstagio($data_fim_estagio)
    {
        $this->data_fim_estagio = $data_fim_estagio;
    }

    /**
     * @return mixed
     */
    public function getProfessor()
    {
        return $this->professor;
    }

    /**
     * @param mixed $professor
     */
    public function setProfessor($professor)
    {
        $this->professor = $professor;
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

    /**
     * @return mixed
     */
    public function getAluno()
    {
        return $this->aluno;
    }

    /**
     * @param mixed $aluno
     */
    public function setAluno($aluno)
    {
        $this->aluno = $aluno;
    }

    /**
     * @return mixed
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * @param mixed $empresa
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;
    }

}