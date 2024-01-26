<?php

use DB\DBM\Database;

$servername = "localhost";
$username = "user1";
$password = "1234";
$dbname = "parole";

$database = new \DBM\DataBase($servername, "3307", $username, $password);
$pdo = $database->connect("ecommerce");

$q = $_GET['q'];
$sql = "SELECT word FROM parole.ricerche WHERE word LIKE '$q%'";
$result = $pdo->query($sql);


    while($row = $result->fetchObject(__CLASS__)) {
        echo $row["word"] . "<br>";
    }

$pdo->close();


