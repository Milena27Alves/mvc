<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Consulta;
use Ifnc\Tads\Entity\Encaminhamento;
use Ifnc\Tads\Entity\Gera;
use Ifnc\Tads\Entity\Solicita;
use Ifnc\Tads\Helper\Transaction;

class EditarProntuarioController
{
    public function request(): void
    {
        $consulta = new Consulta();
        $consulta->id = $_POST['id'];
        $consulta->paciente = $_POST['paciente'];
        $consulta->medico = $_POST['medico'];
        $consulta->data_consulta = $_POST['data'];
        $consulta->turno = $_POST['turno'];
        $consulta->status = $_POST['status'];
        $consulta->registro = $_POST['registro'];
        $consulta->desfecho = $_POST['desfecho'];
        Transaction::open();
        $consulta->store();

        $e1 = $_POST['e1'];
        $e2 = $_POST['e2'];
        $e3 = $_POST['e3'];
        $e4 = $_POST['e4'];
        if(!empty($e1)){
            $encaminhamento1 = new Encaminhamento();
            $encaminhamento1->tipo = $e1;
            $encaminhamento1->consulta = $_POST['id'];
            $encaminhamento1->store();
        }
        if(!empty($e2)){
            $encaminhamento2 = new Encaminhamento();
            $encaminhamento2->tipo = $e2;
            $encaminhamento2->consulta = $_POST['id'];
            $encaminhamento2->store();
        }
        if(!empty($e3)){
            $encaminhamento3 = new Encaminhamento();
            $encaminhamento3->tipo = $e3;
            $encaminhamento3->consulta = $_POST['id'];
            $encaminhamento3->store();
        }
        if(!empty($e4)){
            $encaminhamento4 = new Encaminhamento();
            $encaminhamento4->tipo = $e4;
            $encaminhamento4->consulta = $_POST['id'];
            $encaminhamento4->store();
        }

        $ex1 = $_POST['ex1'];
        $ex2 = $_POST['ex2'];
        $ex3 = $_POST['ex3'];

        if(!empty($ex1)){
            $solicita = new Solicita();
            $solicita->exame = $ex1;
            $solicita->consulta = $_POST['id'];
            $solicita->store();
        }
        if(!empty($ex2)){
            $solicita2 = new Solicita();
            $solicita2->exame = $ex2;
            $solicita2->consulta = $_POST['id'];
            $solicita2->store();
        }
        if(!empty($ex3)){
            $solicita3 = new Solicita();
            $solicita3->exame = $ex3;
            $solicita3->consulta = $_POST['id'];
            $solicita3->store();
        }

        $a1 = $_POST['a1'];
        $a2 = $_POST['a2'];
        $a3 = $_POST['a3'];
        if(!empty($a1)){
            $gera = new Gera();
            $gera->avaliacao = $a1;
            $gera->consulta = $_POST['id'];
            $gera->store();
        }
        if(!empty($a2)){
            $gera2 = new Gera();
            $gera2->avaliacao = $a2;
            $gera2->consulta = $_POST['id'];
            $gera2->store();
        }
        if(!empty($a3)){
            $gera3 = new Gera();
            $gera3->avaliacao = $a3;
            $gera3->consulta = $_POST['id'];
            $gera3->store();
        }
        Transaction::close();

        header('Location: /agendarPorMedico', true, 302);
        exit();
    }

}