<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Ubs;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class editarUbsFormController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalhoListar.php",
                "editar-ubs-form.php",
                "rodape-admin.php"],
            [
                "titulo"=>"Editar Ubs",
                "ubs"=>Ubs::find($_GET["id"])
            ]);

    }
}