<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Consulta;
use Ifnc\Tads\Entity\Paciente;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class editarConsultaFormController
{
    public function request(): void
    {
        Transaction::open();
        $marcar = Consulta::find($_GET["id"]);
        echo Render::html(
            [
                "cabecalhoListar.php",
                "editar-consulta-form.php",
                "rodape-admin.php"],
            [
                "titulo" => "Editar Consulta",
                "marcacao" => $marcar,
                "pacientes"=> Paciente::all()
            ]);
        Transaction::close();
    }
}