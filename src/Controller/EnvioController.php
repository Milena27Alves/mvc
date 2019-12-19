<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Consulta;
use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Mapper\ConsultaMapper;

class EnvioController
{
    public function request(): void{
        $id = $_GET["id"];
        $dt = $_GET["dt"];
        $turno = $_GET["turno"];
        Transaction::open();
        $t = ConsultaMapper::all("medico=$id and turno='$turno' and data_consulta='$dt'");
       echo json_encode($t);
       Transaction::close();
    }
}