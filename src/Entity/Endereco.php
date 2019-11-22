<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class Endereco extends Record
{
    public $id;
    public $logradouro;
    public $numero;
    public $bairro;
    public $cidade;
    public $estado;
    public $cep;

}