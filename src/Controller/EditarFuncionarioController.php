<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Funcionarios;
use Ifnc\Tads\Entity\Produto;
use Ifnc\Tads\Helper\Transaction;

class EditarFuncionarioController implements IController
{

        public function request(): void
    {

        $funcionario = new Funcionarios();
        $funcionario->id = $_POST['id'];
        $funcionario->nome= $_POST['nome'];
        $funcionario->cpf = $_POST['cpf'];
        $funcionario->matricula = $_POST['matricula'];
        Transaction::open();
        $funcionario->store();
        Transaction::close();
        header('Location: /listar-func', true, 302);
        exit();
    }


}