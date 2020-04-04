<!DOCTYPE html>
<html>

<head>
    <title>SGImag - Projet SGI</title>

    <link rel="stylesheet" href="css/styles.css">

    <script type="text/javascript" src="js/slideshow.js"></script>

</head>

<script>

function showFrontPage() {

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } 
        
        else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementByClassName("pagecontent").innerHTML = this.responseText;
            }
        };

        xmlhttp.open("GET","frontpage.php?",true);
        xmlhttp.send();
    }
}
</script>



<body>

    <div class="topnav">


        <a href="index.php"><img src="img/logo_transparent.png" alt="SGImag logo" height="75" width="150"></a>

        <div class="search-container">

                <form action="/action_page.php">
                  <input type="text" placeholder="Search for a product..." name="search">
                  <button type="submit">Search</button>
                </form>
      
              </div>


        <div id="logolinks">

          <div class="dropdown">

        <a><img src="img/account.PNG" alt="My account" height="30" width="30">
      
            <div class="dropdown-content">
              <a href="login.php">Sign IN</a>
              <a href="signup.php">Sign UP</a>
            </div>
   
        </a>

        </div>

        <a href="#favorites"><img src="img/favorites.PNG" alt="Favorites" height="30" width="30"></a>
        <a href="#cart"><img src="img/cart.PNG" alt="Shopping cart" height="30" width="30"></a>

        </div>

      </div> 




      <form class="sidebar">

            <h4>Product categories</h4>

            <a href="cpu.php">CPU</a>
            <a href="motherboard.php">Motherboards</a>
            <a href="gpu.php">GPU</a>
            <a href="ram.php">RAM</a>
            <a href="storage.php">Storage</a>
            <a href="psu.php">Power supplies</a>
            <a href="case.php">Cases</a>

      </form>



  <div class = "pagecontent">

   

</body>

</html> 