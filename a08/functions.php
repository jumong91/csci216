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

    // Function that cleans up the name
        function clean_name($data) {
            $data = strip_tags($data);
            $data = ucwords($data);
            $data = trim($data);
            return $data;
        }

        // Function that cleans up the description
        function clean_up($data) {
            $data = strip_tags($data);
            $data = trim($data);
            $data = ucfirst($data);
            return $data;
        }

    // Only letters and white space allowed
        function unwanted_chars($name) {
            $name = (!preg_match("/^[a-zA-Z ]*$/",$name));
            return $name;
        }
          // Validate Phone
          function validatePhone($string) {
            $numbersOnly = ereg_replace("[^0-9]", "", $string);
            $numberOfDigits = strlen($numbersOnly);
            if ($numberOfDigits == 7 or $numberOfDigits == 10) {
                echo $numbersOnly;
            } else {
                echo 'Invalid Phone Number';
            }
        }
        
        // Alphanumeric and Space
        function alphaNumSpace($input) {
            $input = preg_match('/^[a-z0-9\040\.\,\/]+$/i', $input);
            return $input;
        }
        
        // Alphanumeric, Space and Punctuation
        function alphaNumSpacePunc($input) {
            $input = preg_match('/^[a-z0-9\040\.\?!)(:,;=+\'\"\@#%$&\*\,\_\/]+$/i', $input);
            return $input;
        }

        // Alphanumeric, Space and Punctuation
        function checkPrice($input) {
            $input = preg_match('/^(?:0|[1-9]\d*)(?:\.\d{2})?$/', $input);
            return $input;
        }

?>