<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class AgendaController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalhoAdmin.php",
                "agenda.php",
                "rodape-admin.php"],
            []
           );
    }
}