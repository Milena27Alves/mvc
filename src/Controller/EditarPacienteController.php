<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Endereco;
use Ifnc\Tads\Entity\Paciente;
use Ifnc\Tads\Helper\Transaction;

class EditarPacienteController
{
    public function request(): void
    {
        echo "<pre>";
        var_dump($_POST['id']);
        echo "</pre>";
        $endereco = new Endereco();
        $endereco->id = $_POST['id_end'];
        $endereco->logradouro = $_POST['logradouro'];
        $endereco->numero = $_POST['numero'];
        $endereco->bairro = $_POST['bairro'];
        $endereco->cidade = $_POST['cidade'];
        $endereco->estado = $_POST['estado'];
        $endereco->cep = $_POST['cep'];
        Transaction::open();
        $endereco->store();

        $paciente = new Paciente();
        $paciente->id = $_POST['id'];
        $paciente->nome = $_POST['nome'];
        $paciente->sexo= $_POST['sexo'];
        $paciente->peso = $_POST['peso'];
        $paciente->altura = $_POST['altura'];
        $paciente->sus = $_POST['sus'];
        $paciente->tipo= $_POST['tipo'];
        $paciente->id_familia = $_POST['id_familia'];
        $paciente->endereco = $_POST['id_end'];
        $paciente->store();
        Transaction::close();
        header('Location: /listar-familia', true, 302);
        exit();
    }
}