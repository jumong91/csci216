<?php 

/*----------------------------------------------------------------
Jazzmyr Fowler ---------------------------------------------------
02/18/2017 -------------------------------------------------------
http://chelan.highline.edu/~jum0ng91/215/assignments/a05/index.php
Assignment 5 Personality Test ------------------------------------
------------------------------------------------------------------*/

// Start the session
session_start();

if(!isset($_SESSION['answers'])) {
    $_SESSION['answers'] = array();
}

// Check for errors
ini_set("display_errors", 1);
error_reporting(E_ALL);

$error = "";

if(isset($_POST['sagot'])) {
    $action = filter_input(INPUT_POST, 'sagot');
} 
else if(isset($_GET['sagot'])) {
    $action = filter_input(INPUT_GET, 'sagot');
}
else {
    $action = 'question1';
}

switch($action) {
    case 'question1':
        include 'personalityTest1.php';
        break;
        
    case 'question2':
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(empty($_POST['answer'])) {
                $error = "Please choose one";
                include 'personalityTest1.php';
            } else {
                $_SESSION['answers']['key1'] = $_POST['answer'];
                include 'personalityTest2.php';
            }
        } break;
        
    case 'question3':
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(empty($_POST['answer2'])) {
                $error = "Please choose one";
                include 'personalityTest2.php';
            } else {
                $_SESSION['answers']['key2'] = $_POST['answer2'];
                include 'personalityTest3.php';
            }
        } break;
        
    case 'results':
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(empty($_POST['answer3'])) {
                $error = "Please choose one";
                include 'personalityTest3.php';
            } else {
                $_SESSION['answers']['key3'] = $_POST['answer3'];
                include 'results.php';
            }
        } break;

}

?>