<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\TipoFuncionario;
use Ifnc\Tads\Entity\Ubs;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;


class adcionarFuncionarioController implements IController
{

    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalhoListar.php",
                "adicionar-func.php",
                "rodape-admin.php"],
            [
                "titulo"=>"Adicionar funcionario",
                "tipos"=>TipoFuncionario::all(),
                "ubs" => Ubs::all()
            ]);
    }

}