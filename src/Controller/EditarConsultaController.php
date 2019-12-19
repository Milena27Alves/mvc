<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Consulta;
use Ifnc\Tads\Entity\Familia;
use Ifnc\Tads\Helper\Transaction;

class EditarConsultaController
{
    public function request(): void
    {
        $consulta = new Consulta();
        $consulta->id = $_POST['id'];
        $consulta->paciente = $_POST['paciente'];
        $consulta->medico = $_POST['medico'];
        $consulta->data_consulta = $_POST['data'];
        $consulta->turno = $_POST['turno'];
        $consulta->status = $_POST['status'];
        Transaction::open();
        $consulta->store();
        Transaction::close();

        header('Location: /agendar', true, 302);
        exit();
    }

}