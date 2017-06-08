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

// Declare an array to associate the numbers with letters
$values = array('a'=>1, 'b'=>2, 'c'=>3, 'd'=>4);

// Add up the sum of the selected answers
$totalScore = $_SESSION['answers']['key1'] + $_SESSION['answers']['key2'] + $_SESSION['answers']['key3'];

// Assign sessions to variables
$answer1 = $_SESSION['answers']['key1'];
$answer2 = $_SESSION['answers']['key2'];
$answer3 = $_SESSION['answers']['key3'];

?>

<!-- Header for the page -->
<header>
    <h1>Personality Test</h1>
</header>
    
    <h2>Question Results</h2>
    <?php
    
    // Display Answer 1
    foreach($values as $key => $value) {
    if($answer1 == $value) {
        echo "Answer 1 = " . $key . "<br />";
    }
}
    
    // Display Answer 2
    foreach($values as $key => $value) {
    if($answer2 == $value) {
        echo "Answer 2 = " . $key . "<br />";
    }
}
    
    // Display Answer 3
    foreach($values as $key => $value) {
    if($answer3 == $value) {
        echo "Answer 3 = " . $key . "<br />";
    }
}
    
    ?>
    
    <!-- Display users total score -->
    <h2>Total Score</h2>
    
    <?php echo $totalScore ?>
    
    <h2>Personality Type</h2>
    
    <?php 
    
    // Personality Result
    if($totalScore <= 3) {echo "Your are a frog";}
    else if ($totalScore < 7) {echo "You are an ant";}
    else if ($totalScore < 10) {echo "You are a donut";}
    else {echo "You are always hungry";}
    
    ?>
    
    <!-- Take the quiz again -->
    <h4><a href="index.php">Take the Quiz Again</a></h4>

<!-- Include the HTML footer -->
<?php include 'footer.php' ?>