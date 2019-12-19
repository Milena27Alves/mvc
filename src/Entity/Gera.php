<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class Gera extends Record
{
    public $id;
    public $consulta;
    public $avaliacao;

    public static function allExames($id)
    {
        $rc = new ReflectionClass(get_called_class());
        $sql = "SELECT * FROM {$rc->getShortName()} WHERE consulta = $id";
        if ($conn = Transaction::get()) {
            return $conn->query($sql)->fetchAll(PDO::FETCH_CLASS,get_called_class());
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }

    }

}