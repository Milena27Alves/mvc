<?php
namespace Ifnc\Tads\Mapper;
use Ifnc\Tads\Entity\Cliente;
use Ifnc\Tads\Entity\Consulta;
use Ifnc\Tads\Entity\Funcionarios;
use Ifnc\Tads\Entity\Item;
use Ifnc\Tads\Entity\Paciente;
use Ifnc\Tads\Entity\Venda;

class ConsultaMapper
{
    public static function store(Consulta $consulta)
    {
        $consulta->paciente->store();
        $consulta->medico->store();
        $consulta->store();
    }
    public static function find($id){
        $consulta = Consulta::find($id);
        $consulta->medico = Funcionarios::find($consulta->medico);
        $consulta->paciente = Paciente::find($consulta->paciente);
        return $consulta;
    }
    public static function all($filter): array{
        $consultas = Consulta::all($filter);
        foreach ($consultas as $consulta){
            $consulta->medico = Funcionarios::find($consulta->medico);
            $consulta->paciente = Paciente::find($consulta->paciente);
        }
        return $consultas;
    }
}
