<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Helper\Render;

class opcoesAtendenteControler
{
    public function request(): void
    {
        echo Render::html(
            ["cabecalhoAdmin.php",
                "opcoes-atendente.php",
                "rodape-admin.php"],
            []
        );
    }
}