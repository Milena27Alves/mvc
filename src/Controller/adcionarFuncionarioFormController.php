<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Funcionarios;
use Ifnc\Tads\Entity\Endereco;
use Ifnc\Tads\Entity\Produto;
use Ifnc\Tads\Helper\Transaction;

class adcionarFuncionarioFormController
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

        $funcionario = new Funcionarios();
        $funcionario->nome= $_POST['nome'];
        $funcionario->cpf = $_POST['cpf'];
        $funcionario->matricula= $_POST['matricula'];
        $funcionario->tipo = $_POST['tipo'];
        $funcionario->email = $_POST['email'];
        $funcionario->senha = password_hash($_POST['senha'], PASSWORD_ARGON2I);
        $funcionario->numRegistro= $_POST['registro'];
        $funcionario->endereco = $endereco->id;
        $funcionario->ubs = $_POST['ubs'];
        $funcionario->store();
        Transaction::close();
        header('Location: /listar-func', true, 302);
        exit();
    }

}