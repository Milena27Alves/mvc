<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Consulta;
use Ifnc\Tads\Entity\Endereco;
use Ifnc\Tads\Entity\Familia;
use Ifnc\Tads\Helper\Transaction;

class adcionarConsultaController
{
    public function request(): void
    {
        $consulta = new Consulta();
        $consulta->medico = $_POST['medico'];
        $consulta->paciente = $_POST['nome'];
        $consulta->data_consulta = $_POST['data'];
        $consulta->turno = $_POST['turno'];
        Transaction::open();
        $consulta->store();
        Transaction::close();
        header('Location: /agendar', true, 302);
        exit();
    }
}