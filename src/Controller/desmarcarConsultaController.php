<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Consulta;
use Ifnc\Tads\Helper\Transaction;

class desmarcarConsultaController
{
    public function request(): void
    {
        $id = $_GET["id"];
        Transaction::open();
        Consulta::delete($id);
        Transaction::close();
        header('Location: /agendar', true, 302);
        exit();
    }

}