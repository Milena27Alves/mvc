<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Paciente;
use Ifnc\Tads\Helper\Transaction;

class ApagaPacienteController
{
    public function request(): void
    {
        $id = $_GET["id"];
        Transaction::open();
        Paciente::delete($id);
        Transaction::close();
        header('Location: /listar-familia', true, 302);
        exit();
    }
}