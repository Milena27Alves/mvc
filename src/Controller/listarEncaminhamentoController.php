<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Encaminhamento;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Mapper\ExamesMapper;

class listarEncaminhamentoController
{
    public function request(): void
    {
        Transaction::open();
        $id = $_GET['id'];
        echo Render::html([
            "cabecalhoListar.php",
            "listar-encaminhamento.php",
            "rodape.php"
        ],
            ["encaminhamento" => Encaminhamento::all("consulta = $id"),
                "titulo"=> "Lista de escaminhamentos"]);
    }

}