<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Helper\Render;

class opcoesMedicoController implements IController
{
    public function request(): void
    {
        echo Render::html(
            ["cabecalhoAdmin.php",
                "opcoes-medico.php",
                "rodape-admin.php"],
            [
                //"user"=> isset($_SESSION['usuario']) ? $_SESSION['usuario'] : ''
                ]
        );
    }

}