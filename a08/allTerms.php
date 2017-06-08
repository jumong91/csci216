<?php

/*----------------------------------------------------------------
Jazzmyr Fowler ---------------------------------------------------
03/06/2017 -------------------------------------------------------
http://chelan.highline.edu/~jum0ng91/215/assignments/a08/index.php
Assignment 08 Input / Output -------------------------------------
------------------------------------------------------------------*/

// Check for errors
ini_set("display_errors", 1);
error_reporting(E_ALL | E_STRICT);

include 'header.php';

foreach(file('dictionary.txt') as $line) {
   echo "<p>$line</p>";
}

//print_r($file);
?>

<?php //echo "<p>$terms</p>"; ?>
<br />

<a class="link" href="index.php">Insert New Term!</a>

<?php include 'footer.php'; ?>