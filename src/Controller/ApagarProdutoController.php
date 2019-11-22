<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Produto;
use Ifnc\Tads\Helper\Transaction;

class ApagarProdutoController implements IController
{

    public function request(): void
    {
        $id = $_GET["id"];
        Transaction::open();
        Produto::delete($id);
        Transaction::close();
        header('Location: /listar-produtos', true, 302);
        exit();
    }
}