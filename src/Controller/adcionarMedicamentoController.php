<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Helper\Render;

class adcionarMedicamentoController implements IController
{
    public function request(): void
    {
        echo Render::html(
            [
                "cabecalhoListar.php",
                "adicionar-medicamento.php",
                "rodape-admin.php"],
            [
                "titulo"=>"Adicionar medicamento"
            ]);
    }

}