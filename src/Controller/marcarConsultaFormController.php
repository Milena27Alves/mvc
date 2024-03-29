<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Consulta;
use Ifnc\Tads\Helper\Transaction;

class marcarConsultaFormController implements IController
{
    public function request(): void
    {
        $consulta = new Consulta();
        $consulta->medico = $_POST['medico'];
        $consulta->paciente = $_POST['nome'];
        $consulta->turno = $_POST['turno'];
        $consulta->data_consulta = $_POST['data'];
        Transaction::open();
        $consulta->store();

        Transaction::close();
        header('Location: /listar-medico', true, 302);
        exit();
    }
}