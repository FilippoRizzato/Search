<?php

use DBM\DataBase;

include_once dirname(__FILE__) . '/../DBM/DataBase.php';

$servername = "localhost";
$username = "user1";
$password = "1234";
$dbname = "parole";

$database = new DataBase($servername, "3307", $username, $password);
$pdo = $database->connect("parole");

$q = $_GET['q'];
$sql = "SELECT word FROM parole.ricerche WHERE word LIKE '$q%'";
$result = $pdo->query($sql);

while ($row = $result->fetchObject()) {
    echo $row->word . "<br>";
}



