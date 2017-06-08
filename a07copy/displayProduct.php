<?php

/*----------------------------------------------------------------
Jazzmyr Fowler ---------------------------------------------------
03/03/2017 -------------------------------------------------------
http://chelan.highline.edu/~jum0ng91/215/assignments/a07/index.php
Assignment 07 OOP ------------------------------------------------
------------------------------------------------------------------*/

?>
   
<?php
    include 'header.php'; 
    include 'itemClass.php';
    session_start();
    
    // Check for errors
    ini_set("display_errors", 1);
    error_reporting(E_ALL | E_STRICT);
    //echo '<pre>'print_r($_SESSION)'</pre>';
    
    $id = $_GET['ID'];

if(isset($_SESSION['objects'][$id])) {
    $item = $_SESSION['objects'][$id];
}
       
    //Display each product 
?>
<div class="product">
    <h1><?php echo $item->getName(); ?></h1>
    <h3>Description: <?php echo $item->getDescription(); ?></h3>
    <h3>Price: <?php echo $item->getPrice(); ?></h3>
    <?php echo $item->getImage(); ?>  
    <?php echo "<br /><br />"; ?>
</div>
    
   
  <footer>
         
         <a href="index.php">Go back to products page</a><br /><br />
          
          <a href="http://chelan.highline.edu/~jsnyder/215/dir.htm">Class Directory</a>
           
            <?php 
                $fileName = basename(__FILE__);
                include 'footerValidate6.php';
            ?> 
            
        </footer>
        
    </div>

</body>
</html>