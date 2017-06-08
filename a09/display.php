<?php

/*----------------------------------------------------------------
Jazzmyr Fowler ---------------------------------------------------
03/18/2017 -------------------------------------------------------
http://chelan.highline.edu/~jum0ng91/215/assignments/a09/index.php
Assignment 09 AJAX -----------------------------------------------
------------------------------------------------------------------*/

include 'header.php';
include 'itemClass.php';
include 'items.php';

// Check for errors
ini_set("display_errors", 1);
error_reporting(E_ALL | E_STRICT);
//echo '<pre>'print_r($_SESSION)'</pre>';
$newId = "";

// if it's set, then assign it to a variable $id
if (isset($_GET['ID'])) {
    $id = filter_input(INPUT_GET, 'ID');
}

// Depending on what was clicked, $newID will get the objects from the items.php file
if ($id == 'Porsche Bike;') {
    $newId = 100;
} elseif ($id == 'Pretty Shoes;') {
    $newId = 101;
} elseif ($id == 'Pie Fest!;') {
    $newId = 102;
} elseif ($id == 'Inside Out Umbrella;') {
    $newId = 103;
} else {
    $newId = 104;
}

// Get the objects
$item = $itemsArray[$newId];
$name = $item->getName();
$description = $item->getDescription();
$price = $item->getPrice();
$image = $item->getImage();


//Display each product
?>
<div class="product">
    <?php echo "<h1>$name</h1>"; ?>
    <h3>Description: <?php echo $description; ?></h3>
    <h3>Price: <?php echo $price; ?></h3>
    <?php echo $image; ?>
    <?php echo "<br /><br />"; ?>
</div>

<a class="goBack" href="index.php">Go back to Search</a>

<?php include 'footer.php'; ?>
