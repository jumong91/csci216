<?php

/*----------------------------------------------------------------
Jazzmyr Fowler ---------------------------------------------------
02/18/2017 -------------------------------------------------------
http://chelan.highline.edu/~jum0ng91/215/assignments/a05/index.php
Assignment 5 Personality Test ------------------------------------
------------------------------------------------------------------*/

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