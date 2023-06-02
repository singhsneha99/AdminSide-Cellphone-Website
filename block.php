<?php
session_start();
include 'connection.php';
           
            $id = $_GET['id'];
           
            
 $query = "DELETE FROM product WHERE id=$id";

 
    if (mysqli_multi_query($link, $query)) {
		
         echo '<script type="text/javascript">

                           window.location = "viewmobile.php"
                           alert("Successfully Deleted.");
                         </script>';
    } else {
         echo '<script type="text/javascript">

                           window.location = "viewmobile.php"
                           alert("Error;");
                         </script>';
    }
    
?>


