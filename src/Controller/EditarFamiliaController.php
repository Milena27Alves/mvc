<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Endereco;
use Ifnc\Tads\Entity\Familia;
use Ifnc\Tads\Helper\Transaction;

class EditarFamiliaController implements IController
{
    public function request(): void
    {
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

        $familia = new Familia();
        $familia->id = $_POST['id'];
        $familia->endereco = $endereco->id;
        $familia->store();
        Transaction::close();

        header('Location: /listar-familia', true, 302);
        exit();
    }
}