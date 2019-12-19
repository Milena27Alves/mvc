<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Consulta;
use Ifnc\Tads\Helper\Transaction;

class BuscaMedicoController implements IController
{
    public function request(): void{
        Transaction::open();
        $id = $_GET['user'];
        $dt = $_GET['dt'];
        $t = Consulta::consultasPorMedico("medico=$id and data_consulta='$dt'");
        echo json_encode($t);
    }

}