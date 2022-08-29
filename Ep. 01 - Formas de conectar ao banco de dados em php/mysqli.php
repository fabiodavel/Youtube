<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dbteste";

$conn = mysqli_connect($host, $user, $pass, $db);

$query = mysqli_query($conn, "SELECT * FROM contatos");

$registros = mysqli_fetch_all($query, MYSQLI_ASSOC);

foreach ($registros as $contato) {
    echo $contato['nome'] . ' - ';
    echo $contato['email'];
    echo '<br>';
}