<?php

        session_start();
   
             //header("location: /../index.php");  

           echo "Logged out successfully! \n";
           echo "Returning to home page shortly...";
  
           echo "<script>setTimeout(\"location.href = '/index.php';\",3000);</script>";

        $_SESSION = array();
      
        session_destroy();

?>