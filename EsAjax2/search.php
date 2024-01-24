<?php
$conn = new mysqli("localhost", "username", "password", "nome_database");
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
$parametro = $_GET['parametro'];
$query = "SELECT * FROM tua_tabella WHERE tuo_campo = '$parametro'";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    $risultati = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($risultati);
} else {
    echo json_encode(array('messaggio' => 'Nessun risultato trovato.'));
}
$conn->close();
?>


