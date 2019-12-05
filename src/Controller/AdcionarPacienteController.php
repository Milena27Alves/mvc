<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Familia;

use Ifnc\Tads\Entity\Paciente;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class AdcionarPacienteController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalhoListar.php",
                "adcionar-paciente-form.php",
                "rodape-admin.php"],
            [
                "titulo"=>"Adcionar paciente",
                "familia"=>Familia::find($_GET["id"])
            ]);
    }
}