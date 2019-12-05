<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Funcionarios;
use Ifnc\Tads\Entity\Produto;
use Ifnc\Tads\Entity\TipoFuncionario;
use Ifnc\Tads\Entity\Ubs;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class editarFuncionarioFormController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalhoListar.php",
                "editar-funcionario-form.php",
                "rodape-admin.php"],
            [
                "titulo"=>"Editar funcionario",
                "tipos"=>TipoFuncionario::all(),
                "funcionario"=>Funcionarios::find($_GET["id"]),
                "ubs" => Ubs::all()
            ]);

    }

}