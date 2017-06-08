<?php include 'header.php';

/*----------------------------------------------------------------
Jazzmyr Fowler ---------------------------------------------------
03/18/2017 -------------------------------------------------------
http://chelan.highline.edu/~jum0ng91/215/assignments/a09/index.php
Assignment 09 AJAX -----------------------------------------------
------------------------------------------------------------------*/

// Check for errors
ini_set("display_errors", 1);
error_reporting(E_ALL | E_STRICT);
?>

    <header>
        <h1>What Poduct Would you Like?</h1>
    </header>

    <form>
        <label for="search">Enter Something:</label>
        <input id="search" type="text" name="search" onkeyup="showHint(this.value);">
    </form>

    <p><strong>Suggestions:</strong></p>
    <table id="txtHint"></table>

    <script>
        function showHint(str) {
            var xhttp;
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            }
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    document.getElementById("txtHint").innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", "getHint.php?s=" + str, true);
            xhttp.send();
        }
    </script>

<?php include 'footer.php'; ?>