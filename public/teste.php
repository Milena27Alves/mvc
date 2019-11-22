<?php

use Ifnc\Tads\Entity\Cliente;
use Ifnc\Tads\Entity\Venda;
use Ifnc\Tads\Mapper\VendaMapper;
use Symfony\Component\Yaml\Yaml;

require "../vendor/autoload.php";


$t = new \Ifnc\Tads\Entity\TipoFuncionario();
$t->nome = 'Atendente';
\Ifnc\Tads\Helper\Transaction::open();
$t->store();
\Ifnc\Tads\Helper\Transaction::close();





