<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Helper\Render;

class opcoesAdminController implements IController
{

    public function request(): void
    {
        echo Render::html(
            ["cabecalhoAdmin.php",
                "opcoes-admin.php",
                "rodape-admin.php"],
            []
        );
    }
}