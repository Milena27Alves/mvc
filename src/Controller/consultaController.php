<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Consulta;
use Ifnc\Tads\Helper\Transaction;

class consultaController implements IController
{
    public function request(): void{
        Transaction::open();
        $data = $_GET;
        var_dump($data);
        exit;
    }
}