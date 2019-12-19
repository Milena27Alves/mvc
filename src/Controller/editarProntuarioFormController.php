<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Consulta;
use Ifnc\Tads\Entity\Desfecho;
use Ifnc\Tads\Entity\Paciente;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class editarProntuarioFormController
{
    public function request(): void
    {
        Transaction::open();
        $marcar = Consulta::find($_GET["id"]);
        echo Render::html(
            [
                "cabecalhoListar.php",
                "editar-prontuario-form.php",
                "rodape-admin.php"],
            [
                "titulo" => "Editar Consulta",
                "marcacao" => $marcar,
                "pacientes"=> Paciente::all(),
                "desfecho"=> Desfecho::all()
            ]);
        Transaction::close();
    }
}