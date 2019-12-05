<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\TipoFuncionario;
use Ifnc\Tads\Entity\Ubs;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class AdcionarUbsController implements IController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalhoListar.php",
                "adicionar-ubs.php",
                "rodape-admin.php"],
            [
                "titulo"=>"Adicionar ubs"
            ]);
    }
}