<?php


namespace ProjetoSGES\src\model\VO;


class CursoVO
{
    private $id, $horas_estagio, $nome;

    /**
     * CursoVO constructor.
     * @param $id
     * @param $horas_estagio
     * @param $nome
     */
    public function __construct($id, $horas_estagio, $nome)
    {
        $this->id = $id;
        $this->horas_estagio = $horas_estagio;
        $this->nome = $nome;
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
    public function getHorasEstagio()
    {
        return $this->horas_estagio;
    }

    /**
     * @param mixed $horas_estagio
     */
    public function setHorasEstagio($horas_estagio)
    {
        $this->horas_estagio = $horas_estagio;
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
}