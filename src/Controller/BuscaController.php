<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Entity\Consulta;

class BuscaController implements IController
{
    public function request(): void{
        Transaction::open();
        $dt = $_GET['dt'];
        $t = Consulta::consultasPorMedico("data_consulta = '$dt'");
        echo json_encode($t);
    }
}