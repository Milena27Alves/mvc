<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class Funcionarios extends Record
{
    public $id;
    public $nome;
    public $cpf;
    public $matricula;
    public $fornecedor;
    public $tipo;
    public $email;
    public $senha;
    public $numRegistro;
    public $endereco;

    public function valide($senha){
        return password_verify($senha,$this->senha);
    }


}