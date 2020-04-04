<head>

  <title>SGImag - Sign UP</title>

  <link rel="stylesheet" href="css/signup.css">

</head>

<script>
function redirectFunction() {
  location.replace("index.php")
}
</script>

<body>

<form action="utils/user_register.php" method="post" style="border:1px solid #ccc">
    <div class="container">

      <a href="index.php"><img src="img/logo_transparent.png" alt="SGImag logo" height="75" width="150"></a>

      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>

      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" id="username" required>
  
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
  
      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
  
      <div class="clearfix">
        <button type="button" class="cancelbtn" onclick="redirectFunction()">Cancel</button>
        <button type="submit" name="submit" value="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form> 


  </body>