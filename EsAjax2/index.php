<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ricerca Parole Simili</title>
</head>
<body>

<p>Comincia a scrivere una parola nel campo di input qui sotto:</p>
<p>Suggerimenti: <span id="txtHint"></span></p>

<form>
    Parola: <input type="text" onkeyup="cercaParoleSimili(this.value)">
</form>

<script>
    function cercaParoleSimili(parola) {
        if (parola.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            const xmlhttp = new XMLHttpRequest();

            xmlhttp.onload = function () {
                document.getElementById("txtHint").innerHTML = this.responseText;
            };

            xmlhttp.open("GET", "cerca_parole_simili.php?parola=" + encodeURIComponent(parola), true);
            xmlhttp.send();
        }
    }
</script>

</body>
</html>


