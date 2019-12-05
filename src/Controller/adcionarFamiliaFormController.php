<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Endereco;
use Ifnc\Tads\Entity\Familia;
use Ifnc\Tads\Helper\Transaction;

class adcionarFamiliaFormController
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

        $familia = new Familia();
        $familia->endereco = $endereco->id;
        $familia->store();
        Transaction::close();
        header('Location: /listar-familia', true, 302);
        exit();
    }

}