<?php

/*----------------------------------------------------------------
Jazzmyr Fowler ---------------------------------------------------
03/03/2017 -------------------------------------------------------
http://chelan.highline.edu/~jum0ng91/215/assignments/a07/index.php
Assignment 07 OOP ------------------------------------------------
------------------------------------------------------------------*/

?>

<?php session_start();

if(!isset($_SESSION['objects'])) {
    $_SESSION['objects'] = array();
}

include 'header.php';
include 'itemClass.php';
include 'items.php';

$_SESSION['objects'] = $itemsArray;
$items = $_SESSION['objects'];

// Check for errors
ini_set("display_errors", 1);
error_reporting(E_ALL | E_STRICT); ?>
<?php include 'header.php' 
?>

   <table border='1'>
    <tr><th>Name</th><th>Description</th><th>Price</th><th>Image</th><th>View</th></tr>

<?php
    //Display each product 
    foreach($items as $key => $row) {
?>
        <tr><td class="name"><?php echo $row->getName(); ?></td>
        <td><?php echo $row->getDescription(); ?></td>
        <td><?php echo $row->getPrice(); ?></td>
        <td><?php echo $row->getImage(); ?></td>
        
        <td><a href="displayProduct.php?ID=<?php echo $key; ?>"><button>View</button></a></td>
    
<?php
    }   
?>
    
    </table>
    
   
  <footer>
           
            <a href="http://chelan.highline.edu/~jsnyder/215/dir.htm">Class Directory</a>
           
            <?php 
                $fileName = basename(__FILE__);
                include 'footerValidate6.php';
            ?> 
            
        </footer>
        
    </div>

</body>
</html>