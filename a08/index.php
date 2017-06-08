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

?>

<?php include 'header.php'; ?>
<?php include 'functions.php'; ?>

<?php 

    $termErr = $definitionErr = "";
    $okay = true;

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $term       = $_POST['term'];
        $definition = $_POST['definition'];
        
        // Validate the term
        if(empty($term)) {
            $termErr = " * Please enter a term";
            $okay = false;
        } else {
            $term = clean_name($term);
        }
        
        // Validate the definition
        if(strlen(trim($definition)) == 0) {
            $definitionErr = "Please enter a definition";
            $okay = false;
        } else {
            $definition = clean_up($definition);
        }
        
        // If form is valid, do this
        if($okay) {
            
            $my_file = 'dictionary.txt';
            
            $handle = fopen($my_file, 'a+') or die('Cannot open file:  '.$my_file);
            
            $fileToWrite = "\n" . $term . " - " . $definition;
            
            fwrite($handle, $fileToWrite);
            
            echo "<h1>Success! The term has been added!</h1>";
        }
    }

?>

<a class="link" href="wordOfTheDay.php">Word of the Day!</a><br />
<a class="link" href="allTerms.php">Check out the dictionary!</a><br />

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    
    <label for="term">Term</label><span class="error"><?php echo $termErr; ?></span>
    <input id="term" type="text" name="term" value="<?php if(isset($_POST['term'])) {echo $_POST['term'];} ?>">
    
    <label for="definition">Definition</label><span class="error"><?php echo $definitionErr; ?></span>
    <textarea name="definition" id="definition" cols="30" rows="10"><?php if(isset($_POST['definition'])) {echo $_POST['definition'];} ?></textarea>
    
    <input type="submit" name="submit" value="Add Term">

</form>

<?php include 'footer.php'; ?>
