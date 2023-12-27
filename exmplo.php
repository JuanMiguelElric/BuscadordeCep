<?php
require_once "vendor/autoload.php";
use Juanc\Dio\Search;

$busca = new Search;
$resultado = $busca->getAdressFromZipCode('37165000');

print_r($resultado);
