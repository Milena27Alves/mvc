<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Endereco;
use Ifnc\Tads\Entity\Funcionarios;
use Ifnc\Tads\Entity\Produto;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class ListarFuncionariosController implements IController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html([
            "cabecalhoListar.php",
            "listar-funcionarios.php",
            "rodape.php"
        ],
            ["funcionarios" => Funcionarios::all(),
                "enderecos" => Endereco::all(),
                "titulo"=> "Lista de funcionarios"]);
    }
}