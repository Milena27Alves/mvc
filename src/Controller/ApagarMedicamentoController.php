<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Funcionarios;
use Ifnc\Tads\Entity\Medicamento;
use Ifnc\Tads\Helper\Transaction;

class ApagarMedicamentoController
{
    public function request(): void
    {
        $id = $_GET["id"];
        Transaction::open();
        Medicamento::delete($id);
        Transaction::close();
        header('Location: /listar-medicamento', true, 302);
        exit();
    }
}