<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Funcionarios;
use Ifnc\Tads\Entity\Paciente;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class marcarConsultaEstruturaController
{

    public function request(): void
    {
        Transaction::open();
        echo Render::html([
            "cabecalhoListar.php",
            "form-consulta.php",
            "rodape-admin.php"
        ],
            ["medico"=> $_GET["id"],
                "pacientes"=> Paciente::all(),
                "titulo"=> "Formulario para consulta"]);
    }


}