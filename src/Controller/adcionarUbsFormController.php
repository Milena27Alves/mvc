<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Endereco;
use Ifnc\Tads\Entity\Ubs;
use Ifnc\Tads\Helper\Transaction;

class adcionarUbsFormController implements IController
{
    public function request(): void
    {
        $endereco = new Endereco();
        $endereco->logradouro = $_POST['logradouro'];
        $endereco->numero = $_POST['numero'];
        $endereco->bairro = $_POST['bairro'];
        $endereco->cidade = $_POST['cidade'];
        $endereco->estado = $_POST['estado'];
        $endereco->cep = $_POST['cep'];
        Transaction::open();
        $endereco->store();

        $ubs = new Ubs();
        $ubs->nome= $_POST['nome'];
        $ubs->endereco = $endereco->id;
        $ubs->store();
        Transaction::close();

        header('Location: /listar-ubs', true, 302);
        exit();
}}