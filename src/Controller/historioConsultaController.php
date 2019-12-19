<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Consulta;
use Ifnc\Tads\Entity\Desfecho;
use Ifnc\Tads\Entity\Encaminhamento;
use Ifnc\Tads\Entity\Paciente;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class historioConsultaController
{
    public function request(): void
    {
        Transaction::open();
        $id = $_GET['id'];
        echo Render::html(
            [
                "cabecalhoListar.php",
                "listar-historico.php",
                "rodape-admin.php"],
            [
                "titulo"=>"Listar historico de consulta",
                "paciente"=>Consulta::all("paciente=$id")
            ]);

    }
}