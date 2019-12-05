<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Endereco;
use Ifnc\Tads\Entity\Funcionarios;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class listarController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html([
            "cabecalhoListar.php",
            "listar-func.php",
            "rodape-admin.php"
        ],
            ["funcionarios" => Funcionarios::all(),
                "titulo"=> "Lista de funcionarios"]);
    }

}