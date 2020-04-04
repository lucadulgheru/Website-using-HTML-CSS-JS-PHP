<head>

<title>SGImag - Sign IN</title>

<link rel="stylesheet" href="css/login.css">

</head>

<script>

  function redirectFunction() {
    location.replace("index.php")
  }

</script>

<body>

<form action="utils/user_login.php" method="post">

<a href="index.php"><img src="img/logo_transparent.png" alt="SGImag logo" height="75" width="150"></a>

  <div class="imgcontainer">
    <img src="img/user.png" alt="Avatar" style="width=100px; height:100px;" class="avatar">
  </div>

  

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" name="submit" value="submit">Login</button>
   
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" onclick="redirectFunction()">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form> 

</body>