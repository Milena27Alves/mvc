<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Familia;
use Ifnc\Tads\Helper\Transaction;

class ApagarFamiliaController
{
    public function request(): void
    {
        $id = $_GET["id"];
        Transaction::open();
        Familia::delete($id);
        Transaction::close();
        header('Location: /listar-familia', true, 302);
        exit();
    }
}