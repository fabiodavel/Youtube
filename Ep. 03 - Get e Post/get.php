<?php
include("config.php");

$codigo = $_GET['codigo'];
$produto = $produtos[$codigo];

echo $produto['nome'];
echo ': ';
echo $produto['valor'];
