<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Funcionarios;
use Ifnc\Tads\Entity\Medicamento;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class listarMedicamentoController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html([
            "cabecalhoListar.php",
            "listar-medicamento.php",
            "rodape-admin.php"
        ],
            ["medicamentos" => Medicamento::all(),
                "titulo"=> "Lista de medicamento"]);
    }
}