<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\Render;

class PortalController implements IController
{

    public function request(): void
    {
        echo Render::html(
            [
                "cabecalho.php",
                "rodape.php"
            ],
            [
                "titulo"=>"Portal Web"
            ]);
    }
}