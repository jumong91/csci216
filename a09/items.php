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

/*--------------
 CREATE OBJECTS
 --------------*/

//------- Bike Object -------//
$itemsArray[100] = new Item('Porsche Bike', 'A bike with a brand name!', '$10,000', '<img src="images/bike.jpg" alt="A porsche bike">');

//------- Pretty Shoes Object -------//
$itemsArray[101] = new Item('Pretty Shoes', 'Come to our shoe store', '$54.45', '<img src="images/shoes.jpg" alt="Some pretty shoes">');

//------- Pie Fest! Object -------//
$itemsArray[102] = new Item('Pie Fest', 'Oh yeah this is officially the best pie ever', '$3.45', '<img src="images/pie.jpg" alt="The best pie in the world">');

//------- Pie Fest! Object -------//
$itemsArray[103] = new Item('Inside Out Umbrella', 'Designer Umbrellas for low cost', '$14.55', '<img src="images/umbrella.jpg" alt="A very nice umbrella">');

//------- Pie Fest! Object -------//
$itemsArray[104] = new Item('Coffee', 'Come get your morning dessert', '$4.59', '<img src="images/coffee.jpg" alt="Start off your day with this coffee">');

?>