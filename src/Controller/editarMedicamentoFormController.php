<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Funcionarios;
use Ifnc\Tads\Entity\Medicamento;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class editarMedicamentoFormController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalhoListar.php",
                "editar-medicamento-form.php",
                "rodape-admin.php"],
            [
                "titulo"=>"Editar medicamento",
                "medicamento"=>Medicamento::find($_GET["id"])
            ]);

    }

}