<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Endereco;
use Ifnc\Tads\Entity\Familia;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class editarFamiliaFormController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalhoListar.php",
                "editar-familia-form.php",
                "rodape-admin.php"],
            [
                "titulo"=>"Editar Ubs",
                "familia"=>Familia::find($_GET["id"])
            ]);
}}