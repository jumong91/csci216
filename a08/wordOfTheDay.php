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

$file = file("dictionary.txt"); 
    $line = $file[rand(0, count($file) - 1)];

//print_r($file);
?>

<?php echo "<h2>$line</h2>"; ?>

<a class="link" href="index.php">Insert New Term!</a>
<a class="link" href="allTerms.php">Check out the dictionary!</a><br />

<?php include 'footer.php'; ?>