
<?php
require "../vendor/autoload.php";

use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Entity\Consulta;

Transaction::open();
$t = Consulta::all();
console.log($t);
Transaction::close();
?>

