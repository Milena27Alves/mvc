<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Helper\Render;

class opcoesAcsController
{
    public function request(): void
    {
        echo Render::html(
            ["cabecalhoAdmin.php",
                "opcoes-acs.php",
                "rodape-admin.php"],
            []
        );
    }
}