<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class AgendaMedicoController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalhoAdmin.php",
                "agendaMedico.php",
                "rodape-admin.php"],
            [
                "user"=> isset($_SESSION['usuario']) ? $_SESSION['usuario'] : ''
            ]
        );
    }
}