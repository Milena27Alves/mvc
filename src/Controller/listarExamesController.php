<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Familia;
use Ifnc\Tads\Entity\Gera;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Mapper\ExamesMapper;

class listarExamesController
{
    public function request(): void
    {
        Transaction::open();
        $id = $_GET['id'];
        echo Render::html([
            "cabecalhoListar.php",
            "listar-exame.php",
            "rodape.php"
        ],
            ["exames" => ExamesMapper::all("consulta = $id"),
                "titulo"=> "Lista de familias"]);
    }
}