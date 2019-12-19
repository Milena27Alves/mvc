<?php

use Ifnc\Tads\Entity\Avaliacao;
use Ifnc\Tads\Entity\Venda;
use Ifnc\Tads\Mapper\ConsultaMapper;
use Symfony\Component\Yaml\Yaml;
use Ifnc\Tads\Entity\Consulta;
use Ifnc\Tads\Entity\Funcionarios;
use Ifnc\Tads\Helper\Transaction;

require "../vendor/autoload.php";

\Ifnc\Tads\Helper\Transaction::open();
$desfecho = new \Ifnc\Tads\Entity\Avaliacao();
$desfecho->tipo = "Saúde Fisica";
$desfecho->store();
\Ifnc\Tads\Helper\Transaction::close();





