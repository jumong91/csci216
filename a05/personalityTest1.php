<?php 

/*----------------------------------------------------------------
Jazzmyr Fowler ---------------------------------------------------
02/18/2017 -------------------------------------------------------
http://chelan.highline.edu/~jum0ng91/215/assignments/a05/index.php
Assignment 5 Personality Test ------------------------------------
------------------------------------------------------------------*/

// Check for errors
ini_set("display_errors", 1);
error_reporting(E_ALL);

// Show what's getting passed through the array
//echo '<pre>'.print_r($_POST).'</pre>';

// Include the HTML header
include 'header.php';
//include 'validate.php';

?>

<!-- Header for the page -->
<header>
    <h1>Personality Test</h1>
    
    <p>Time to find out more about your personality. When completing your personality test, remember to select the first option that comes to your head. Don't overthink it &#59;&#45;&#41;</p>
    
    <span class="error"><?php echo $error ?></span>
    
</header>

<!-- Start the form -->
<form action="index.php" method="POST">
    
    <h2>1&#41; When you see a chicken what is your first reaction?</h2>
    
    <input id="one" type="radio" name="answer" value="1" <?php if(isset($_POST['answer']) && $_POST['answer'] == 1) {echo 'checked="checked"';} ?>>
    <label for="one">Wonder why she's not crossing the road</label></br>
    
    <input id="two" type="radio" name="answer" value="2" <?php if(isset($_POST['answer']) && $_POST['answer'] == 2) {echo 'checked="checked"';} ?>>
    <label for="two">I better get out of here</label></br>
    
    <input id="three" type="radio" name="answer" value="3" <?php if(isset($_POST['answer']) && $_POST['answer'] == 3) {echo 'checked="checked"';} ?>>
    <label for="three">Start making clucking noises</label></br>
    
    <input id="four" type="radio" name="answer" value="4" <?php if(isset($_POST['answer']) && $_POST['answer'] == 4) {echo 'checked="checked"';} ?>>
    <label for="four">Think about how it tastes</label></br></br>
    
    <input type="hidden" name="sagot" value="question2">
    <input type="submit" value="Continue">
    
</form>


<!-- Include the HTML footer -->
<?php include 'footer.php' ?>