<?php

/*----------------------------------------------------------------
Jazzmyr Fowler ---------------------------------------------------
03/18/2017 -------------------------------------------------------
http://chelan.highline.edu/~jum0ng91/215/assignments/a09/index.php
Assignment 09 AJAX -----------------------------------------------
------------------------------------------------------------------*/

// Check for errors
ini_set("display_errors", 1);
error_reporting(E_ALL | E_STRICT);

// Open the file and put the contents into an array
$lines = array();
$fp = fopen('adds.txt', 'r');
while (!feof($fp)) {

    // get the lines of the file
    $line = fgets($fp);

    // add to array
    array_push($lines, $line);

}
fclose($fp);

// get the s parameter from URL
$s = $_GET["s"];

$hint = "";

?>

<table>

    <tr>
        <th>Product Name</th>
        <th>Product Description</th>
        <th>Price</th>
        <th>View Item</th>

    </tr>

    <?php
    // lookup all hints from array if $s is different from "", separate and put into a table
    if ($s !== "") {
        $s = strtolower($s);
        $len = strlen($s);
        foreach ($lines as $line) {
            if (!empty($line) && stristr($s, substr($line, 0, $len))) {
                $line = explode(";", $line);
                echo $hint = "<tr><td>$line[0]</td> <td>$line[1]</td> <td>$line[2]</td><td><a href=\"display.php?ID=$line[0];\"><button>View</button></a></td></tr>";
            }
        }
    }

    // Output "no suggestion" if no hint was found
    if ($hint === "") {
        echo "no suggestion";
    }

    ?>

</table>
