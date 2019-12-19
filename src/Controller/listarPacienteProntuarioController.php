<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Familia;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class listarPacienteProntuarioController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html([
            "cabecalhoListar.php",
            "listar-paciente-Prontuario.php",
            "rodape.php"
        ],
            [
                "familia"=>Familia::find($_GET["id"]),
                "titulo"=> "Lista de pacientes"]);
    }
}