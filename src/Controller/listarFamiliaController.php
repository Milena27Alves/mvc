<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Familia;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class listarFamiliaController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html([
            "cabecalhoListar.php",
            "listar-familias.php",
            "rodape.php"
        ],
            ["familias" => Familia::all(),
             "titulo"=> "Lista de familias"]);
    }
}