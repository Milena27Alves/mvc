<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\Render;

class AdicionarProdutoFormController implements IController
{

    public function request(): void
    {
        echo Render::html(
            [
                "cabecalho.php",
                "adicionar-produto-form.php",
                "rodape.php"],
            [
                "titulo"=>"Adicionar Produto"
            ]);
    }
}