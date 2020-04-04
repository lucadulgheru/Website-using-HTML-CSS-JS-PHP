<?php

   session_start();

   include("config.php");


   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['uname']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['psw']); 
      
      $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";

      $result = mysqli_query($conn,$sql);
      
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         

         $_SESSION['userid'] = $row['id'];
         
         
         if(!isset($_COOKIE["user".$_SESSION['userid']])){

               setcookie("user".$_SESSION['userid'], "", time() + (86400 * 30), '/');

         }


           echo "Logged in successfully! \n";
           echo "Returning to home page shortly...";
  
           echo "<script>setTimeout(\"location.href = '/index_loggedin.php';\",3000);</script>";
      }
      
      else {

            header("location: /../login.php");
            

      }
   }
?>