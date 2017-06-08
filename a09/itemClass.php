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

class Item
{
    private $name, $description, $price, $image;

    // Constructor method
    public function __construct($name, $description, $price, $image)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
    }

    // Set the name
    public function setName($name)
    {
        $this->name = $name;
    }

    // Get the name
    public function getName()
    {
        return $this->name;
    }

    // Set the description
    public function setDescription($description)
    {
        $this->description = $description;
    }

    // Get the description
    public function getDescription()
    {
        return $this->description;
    }

    // Set the price
    public function setPrice($price)
    {
        $this->price = $price;
    }

    // Get the price
    public function getPrice()
    {
        return $this->price;
    }

    // Set the image
    public function setImage($image)
    {
        $this->image = $image;
    }

    // Get the image
    public function getImage()
    {
        return $this->image;
    }
}

?>