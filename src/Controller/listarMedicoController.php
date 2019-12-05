<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Funcionarios;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class listarMedicoController implements IController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html([
            "cabecalhoListar.php",
            "listar-medicos.php",
            "rodape-admin.php"
        ],
            ["medicos" => Funcionarios::allMedico(),
                "titulo"=> "Lista de medicos"]);
    }

}