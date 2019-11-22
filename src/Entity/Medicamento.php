<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class Medicamento extends Record

{
    public $id;
    public $nome;
    public $descricao;
    public $valorDeCusto;
    public $quantidade;
    public $dataDeCadastro;
    public $fornecedor;

}