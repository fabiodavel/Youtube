<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dbteste";

$conn = new PDO("mysql:host={$host};dbname={$db}", $user, $pass);

$query = $conn->query("SELECT * FROM contatos");

$registros = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($registros as $contato) {
    echo $contato['nome'] . ' - ';
    echo $contato['email'];
    echo '<br>';
}