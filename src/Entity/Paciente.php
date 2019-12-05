<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class Paciente extends Record
{
    public $id;
    public $nome;
    public $sexo;
    public $peso;
    public $altura;
    public $sus;
    public $tipo;
    public $id_familia;
    public $endereco;

}