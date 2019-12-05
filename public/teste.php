<?php

use Ifnc\Tads\Entity\Cliente;
use Ifnc\Tads\Entity\Venda;
use Ifnc\Tads\Mapper\VendaMapper;
use Symfony\Component\Yaml\Yaml;
use Ifnc\Tads\Entity\Consulta;
use Ifnc\Tads\Entity\Funcionarios;
use Ifnc\Tads\Helper\Transaction;

require "../vendor/autoload.php";

\Ifnc\Tads\Helper\Transaction::open();
$a = \Ifnc\Tads\Entity\Funcionarios::allMedico();
    //\Ifnc\Tads\Entity\Consulta::allDat(date("Y/m/d", strtotime(03/12/2019)));
//$a = var_dump(\Ifnc\Tads\Entity\Consulta::all());

var_dump($a);
\Ifnc\Tads\Helper\Transaction::close();





