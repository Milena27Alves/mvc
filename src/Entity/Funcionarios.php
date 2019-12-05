<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class Funcionarios extends Record
{
    public $id;
    public $nome;
    public $cpf;
    public $matricula;
    public $tipo;
    public $email;
    public $senha;
    public $numRegistro;
    public $endereco;
    public $ubs;

    public function valide($senha){
        return password_verify($senha,$this->senha);
    }
    public static function listarMedicos()
    {
        $sql = "SELECT id, nome FROM funcionarios WHERE tipo = 4";
        if ($conn = Transaction::get()) {
            return $conn->query($sql)->fetchAll(PDO::FETCH_CLASS);
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }

    }



}