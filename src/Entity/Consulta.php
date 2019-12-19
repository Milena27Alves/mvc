<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;
use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Helper\Util;
use PDO;

class Consulta extends Record
{
    public $id;
    public $paciente;
    public $data_consulta;
    public $turno;
    public $medico;
    public $status;
    public $registro;
    public $desfecho;


    public static function listaDeConsultas($id, $turno){
        $consultas = Consulta::all("medico = ".$id." AND turno like '".$turno."'");

        foreach ($consultas as $c){
            $c->paciente = Paciente::find($c->paciente );
        }
        return $consultas;
    }
    public static function teste($id, $turno, $data){
        $consultas = Consulta::all("medico = ".$id." AND turno like '".$turno."'"." AND data_consulta like '".$data."'");

        foreach ($consultas as $c){
            $c->paciente = Paciente::find($c->paciente );
        }
        return $consultas;
    }

    public static function consultasPorMedico($filter = NULL)
    {
        //$sql = "SELECT  medico, data_consulta, turno, count(*)  as quantidade FROM consulta";

        $sql = "SELECT  c.medico, f.nome, c.data_consulta, c.turno, count(c.id)  as quantidade FROM consulta c inner join funcionarios f ON f.id = c.medico group by c.medico, f.nome, c.data_consulta, c.turno";

        if($filter){
            $sql = "SELECT c.medico, f.nome, c.data_consulta, c.turno, count(c.id)  as quantidade FROM consulta c inner join funcionarios f ON f.id = c.medico WHERE {$filter} group by c.medico, f.nome, c.data_consulta, c.turno";
            //$sql = " WHERE {$filter}";
        }

        //$sql.= "  group by medico, data_consulta, turno";
        if ($conn = Transaction::get()) {
            return $conn->query($sql)->fetchAll(PDO::FETCH_CLASS, self::class);
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }

    }



}
