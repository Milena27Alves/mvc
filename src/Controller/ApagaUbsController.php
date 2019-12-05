<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Ubs;
use Ifnc\Tads\Helper\Transaction;

class ApagaUbsController
{
    public function request(): void
    {
        $id = $_GET["id"];
        Transaction::open();
        Ubs::delete($id);
        Transaction::close();
        header('Location: /listar-ubs', true, 302);
        exit();
    }
}