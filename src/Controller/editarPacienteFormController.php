<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Paciente;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class editarPacienteFormController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalhoListar.php",
                "editar-paciente-form.php",
                "rodape-admin.php"],
            [
                "titulo"=>"Editar medicamento",
                "paciente"=>Paciente::find($_GET["id"])
            ]);

    }
}