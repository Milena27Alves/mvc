<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;
use Ifnc\Tads\Helper\Transaction;
use PDO;

class Consulta extends Record
{
    public $id;
    public $paciente;
    public $data_consulta;
    public $turno;
    public $medico;

    public static function consultasPorMedico($filter = NULL)
    {
        $sql = "SELECT  medico, data_consulta, turno, count(*)  as quantidad FROM consulta";

        if($filter){
            $sql .= " WHERE {$filter}";
        }
        $sql.= "  group by medico, data_consulta, turno";
        if ($conn = Transaction::get()) {
            return $conn->query($sql)->fetchAll(PDO::FETCH_CLASS, self::class);
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }

    }



}
