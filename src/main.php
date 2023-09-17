<?php
include_once  __DIR__ . "/../vendor/autoload.php";

use App\model\Usuario;

$u = new Usuario("joao");
$a = new Usuario("Gu");
echo  $u->getNome();
echo  $a->getNome();

echo "<h1>ghagarg</h1>";