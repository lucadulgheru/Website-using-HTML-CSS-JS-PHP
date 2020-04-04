<?php


    require "config.php";

    if (isset($_POST['submit'])){

        
        $usr = htmlentities($_POST['username']);
        $psw = htmlentities($_POST['psw']);
        $email = htmlentities($_POST['email']);


        $validate_user = "SELECT * FROM users WHERE username='$usr'";
        $validate_email = "SELECT * FROM users WHERE email='$email'";

        if($conn->query($validate_user)->num_rows == 1){

            echo "<script>alert('This username has already been taken! Click OK to go back and try again!');</script>";
            echo "<script>setTimeout(\"location.href = '/signup.php';\",5);</script>";

        }

        else if ($conn->query($validate_email)->num_rows == 1){

            echo "<script>alert('This email is already being used! Click OK to go back and try again!');</script>";
            echo "<script>setTimeout(\"location.href = '/signup.php';\",5);</script>";

        }

        else{

        $sql = "INSERT INTO users (username, password, email)

        VALUES ('$usr', '$psw', '$email')";
        
        if ($conn->query($sql) === TRUE) {



            echo "Account created successfully! \n";
            echo "Returning to home page shortly...";
  
            echo "<script>setTimeout(\"location.href = '/index.php';\",3000);</script>";

                
               
        } 
        
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
        
        $conn->close();


    }