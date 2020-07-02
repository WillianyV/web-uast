<?php


namespace ProjetoSGES\src\model\DAO;
require_once "Connection.php";

use ProjetoSGES\src\model\VO\EstagioVO;

session_start();

class EstagioDAO implements InterfacesDAO
{

    static function create($estagio)
    {

        $numero_seguro = $estagio->getNumeroSeguro();
        $matricula = $estagio->getMatricula();
        $turno = $estagio->getTurno();
        $professor = $estagio->getProfessor()->getId();
        $curso = $estagio->getCurso()->getId();
        $empresa = $estagio->getEmpresa()->getId();

        $aluno = $_SESSION["user_logado"];

        //Em editar:
        $status = $estagio->getStatus();
        $data_inicio_estagio = $estagio->getDataInicioEstagio();
        $data_fim_estagio = $estagio->getDataFimEstagio();


        $link = getConnection();
        $query = "INSERT INTO estagios(data_inicio, num_seguro, data_fim, status, matricula, turno, id_curso, id_professor, id_empresa, id_aluno) VALUES ('{$data_inicio_estagio}','{$numero_seguro}','{$data_fim_estagio}','{$status}','{$matricula}','{$turno}','{$curso}','{$professor}','{$empresa}','{$aluno}')";
        $result = $link->query($query);
        $link->close();
        if(!$result){
            die ("Erro ao cadastrar Estágio " . mysqli_error());
        }
    }

    static function findAll()
    {
        $estagios = [];
        $link = getConnection();
        $query = "SELECT * FROM estagios";

        if($result = $link->query($query)){
            while($row = $result->fetch_row()){
                $estagios [] = new EstagioVO($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10]);
            }
        }

        $link->close();
        return $estagios;
    }

    static function findById($id)
    {
        $link = getConnection();

        $query = "SELECT * FROM estagios WHERE id='{$id}'";

        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                return new EstagioVO($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10]);
            }
        }
        $link->close();
        return null;
    }

    static function update($id, $estagio)
    {
        $numero_seguro = $estagio->getNumeroSeguro();
        $matricula = $estagio->getMatricula();
        $turno = $estagio->getTurno();
        $professor = $estagio->getProfessor()->getId();
        $curso = $estagio->getCurso()->getId();
        $empresa = $estagio->getEmpresa()->getId();
        $aluno = $estagio->getAluno()->getId();
        $status = $estagio->getStatus();
        $data_inicio_estagio = $estagio->getDataInicioEstagio();
        $data_fim_estagio = $estagio->getDataFimEstagio();

        $link = getConnection();
        $query = "UPDATE estagios SET data_inicio='{$data_inicio_estagio}',num_seguro='{$numero_seguro}',data_fim='{$data_fim_estagio}',status='{$status}',matricula='{$matricula}',turno='{$turno}',id_curso='{$curso}',id_professor='{$professor}',id_empresa='{$empresa}',id_aluno='{$aluno}' WHERE id=$id";
        $link->query($query);
        $link->close();
    }

    static function confirmarOrientacao($idEstagio){
        $link = getConnection();
        $status = "solicitado";
        $query = "UPDATE estagios SET status='{$status}' WHERE id=$idEstagio";
        $link->query($query);
        $link->close();
    }

    static function confirmarEstagioCoordenacao(){
        $estagios = [];
        $link = getConnection();
        $status = "solicitado";
        $query = "SELECT * FROM estagios WHERE status = $status";

        if($result = $link->query($query)){
            while($row = $result->fetch_row()){
                $estagios [] = new EstagioVO($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10]);
            }
        }

        $link->close();
        return $estagios;
    }

//    USAR O DELETE TBM PARA dispensarOrientacoes()
    static function delete($id)
    {
        $link = getConnection();
        $query = "DELETE FROM estagios WHERE id=$id";
        $link->query($query);
        $link->close();
    }


}