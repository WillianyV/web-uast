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
    public function __construct($codigo_servidor)
    {
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

}