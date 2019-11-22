<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Medicamento;
use Ifnc\Tads\Helper\Transaction;

class EditarMedicamentoController implements IController
{
    public function request(): void
    {
        $medicamento = new Medicamento();
        $medicamento->id = $_POST['id'];
        $medicamento->nome= $_POST['nome'];
        $medicamento->descricao = $_POST['descricao'];
        $medicamento->valorDeCusto = $_POST['valorDecusto'];
        $medicamento->quantidade = $_POST['quantidade'];
        $medicamento->dataDeCadastro = date('Y-m-d');
        $medicamento->fornecedor = $_POST['fornecedor'];

        Transaction::open();
        $medicamento->store();
        Transaction::close();
        header('Location: /listar-medicamento', true, 302);
        exit();
    }
}