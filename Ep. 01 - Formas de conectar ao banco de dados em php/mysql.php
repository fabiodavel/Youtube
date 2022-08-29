<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dbteste";

$conn = mysql_connect($host, $user, $pass);

mysql_select_db($db, $conn);

$query = mysql_query("SELECT * FROM contatos", $conn);

while($contato = mysql_fetch_assoc($query) ) {
    echo $contato['nome'] . ' - ';
    echo $contato['email'];
    echo '<br>';
}