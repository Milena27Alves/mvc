<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Familia;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class AdcionarFamiliaController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalhoListar.php",
                "adicionar-familia.php",
                "rodape-admin.php"],
            [
                "titulo"=>"Adicionar familia"
            ]);
    }


}