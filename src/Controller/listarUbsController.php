<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Medicamento;
use Ifnc\Tads\Entity\Ubs;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class listarUbsController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html([
            "cabecalhoListar.php",
            "listarUbs.php",
            "rodape-admin.php"
        ],
            ["ubss" => Ubs::all(),
                "titulo"=> "Lista Ubs"]);
    }
}