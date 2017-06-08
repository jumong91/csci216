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

?>
   

   <div id="footer">
    <div><?php echo "Filename: $fileName" ; ?></div>
    <div><?php 
    	$validate = "https://validator.w3.org/nu/?doc=https://" ;
		$validate .= $_SERVER['SERVER_NAME'] ;
		$validate .= $_SERVER['SCRIPT_NAME'] ;
		print "<a href=\"$validate\">validate</a>";	?>
    Created by: Jazzmyr Fowler</div>
    <div><?php
    		$fileChanged = filemtime($fileName);
			echo "Last Edited: ".date("n/j/Y",$fileChanged);
		?></div>
</div>