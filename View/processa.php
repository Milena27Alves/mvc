<?php
\Ifnc\Tads\Helper\Transaction::open();
$campo= $_POST['exemplo'];
$a = \Ifnc\Tads\Entity\Consulta::all();
var_dump($a);
var_dump(count($a));

\Ifnc\Tads\Helper\Transaction::close();
?>
