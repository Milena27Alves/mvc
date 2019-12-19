<?php


namespace Ifnc\Tads\Mapper;


use Ifnc\Tads\Entity\Consulta;
use Ifnc\Tads\Entity\Exame;
use Ifnc\Tads\Entity\Funcionarios;
use Ifnc\Tads\Entity\Gera;
use Ifnc\Tads\Entity\Paciente;
use Ifnc\Tads\Entity\Solicita;

class ExamesMapper
{
    public static function store(Gera $gera)
    {
        $gera->consulta->store();
        $gera->exame->store();
        $gera->store();
    }
    public static function find($id){
        $gera = Solicita::find($id);
        $gera->consulta = Consulta::find($gera->consulta);
        $gera->exame = Exame::find($gera->exame);
        return $gera;
    }
    public static function all($filter): array{
        $gera = Solicita::all($filter);
        foreach ($gera as $geras){
            $geras->exame = Exame::find($geras->exame
            );

        }
        return $gera;
    }
}