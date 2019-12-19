<?php


namespace Ifnc\Tads\Mapper;


use Ifnc\Tads\Entity\Avaliacao;
use Ifnc\Tads\Entity\Consulta;
use Ifnc\Tads\Entity\Exame;
use Ifnc\Tads\Entity\Gera;
use Ifnc\Tads\Entity\Solicita;

class AvaliacaoMapper
{
    public static function store(Gera $gera)
    {
        $gera->consulta->store();
        $gera->avaliacao->store();
        $gera->store();
    }
    public static function find($id){
        $gera = Gera::find($id);
        $gera->consulta = Consulta::find($gera->consulta);
        $gera->avaliacao = Avaliacao::find($gera->avaliacao );
        return $gera;
    }
    public static function all($filter): array{
        $gera = Gera::all($filter);
        foreach ($gera as $geras){
            $geras->avaliacao = Avaliacao::find($geras->avaliacao);

        }
        return $gera;
    }

}