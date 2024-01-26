<!DOCTYPE html>
<html lang="">
<body>

<h2>Digita nella barra di ricerca</h2>

<p>Risultati: <span id="txtHint"></span></p>
<p> Cerca: <label for="txt1"></label><input type="text" id="txt1" onkeyup="showHint(this.value)"></p>

<script>
    function showHint(str) {
        if (str.length === 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
        }
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            document.getElementById("txtHint").innerHTML =
                this.responseText;
        }
        xhttp.open("GET", "hint.php?q="+str);
        xhttp.send();
    }
</script>

</body>
</html>
