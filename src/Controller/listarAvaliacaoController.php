<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Mapper\AvaliacaoMapper;
use Ifnc\Tads\Mapper\ExamesMapper;

class listarAvaliacaoController
{
    public function request(): void
    {
        Transaction::open();
        $id = $_GET['id'];
        echo Render::html([
            "cabecalhoListar.php",
            "listar-avaliacao.php",
            "rodape.php"
        ],
            ["avaliacao" => AvaliacaoMapper::all("consulta = $id"),
                "titulo"=> "Lista de avaliacao"]);
    }
}