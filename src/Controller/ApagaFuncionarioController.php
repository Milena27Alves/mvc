<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Funcionarios;
use Ifnc\Tads\Helper\Transaction;

class ApagaFuncionarioController implements IController
{
    public function request(): void
    {
        $id = $_GET["id"];
        Transaction::open();
        Funcionarios::delete($id);
        Transaction::close();
        header('Location: /listar-func', true, 302);
        exit();
    }
}