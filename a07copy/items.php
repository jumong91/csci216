<?php

/*----------------------------------------------------------------
Jazzmyr Fowler ---------------------------------------------------
03/03/2017 -------------------------------------------------------
http://chelan.highline.edu/~jum0ng91/215/assignments/a07/index.php
Assignment 07 OOP ------------------------------------------------
------------------------------------------------------------------*/

    // Check for errors
    ini_set("display_errors", 1);
    error_reporting(E_ALL | E_STRICT);

 /*--------------
  CREATE OBJECTS
  --------------*/

//------- Bike Object -------//
$itemsArray[100] = new Item('Porsche Bike', 'A bike with a brand name!', '$10,000', '<img src="images/bike.jpg">');

//------- Pretty Shoes Object -------//
$itemsArray[101] = new Item('Pretty Shoes', 'Come to our shoe store', '$54.45', '<img src="images/shoes.jpg">');

//------- Pie Fest! Object -------//
$itemsArray[102] = new Item('Pie Fest', 'Oh yeah this is officially the best pie ever', '$3.45', '<img src="images/pie.jpg">');

//------- Pie Fest! Object -------//
$itemsArray[103] = new Item('Inside Out Umbrella', 'Designer Umbrellas for low cost', '$14.55', '<img src="images/umbrella.jpg">');

//------- Pie Fest! Object -------//
$itemsArray[104] = new Item('Coffee', 'Come get your morning dessert', '$4.59', '<img src="images/coffee.jpg">');

?>