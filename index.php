<!DOCTYPE html>
<html>

<head>

    <title>SGImag - Projet SGI</title>

    <link rel="stylesheet" href="css/styles.css">

    <script type="text/javascript" src="js/slideshow.js"></script>
    <script type="text/javascript" src="js/updatecontent.js"></script>
    <script type="text/javascript" src="js/searchcontent.js"></script>

</head>


<body onload="showSlides()">

    <div class="topnav">

        <a href="index.php"><img src="img/logo_transparent.png" alt="SGImag logo" height="75" width="150"></a>

        <div class="search-container">

               
                  <input type="text" placeholder="Search for a product..." name="search" id="search">
                  <button type="submit" onclick='searchContent(document.getElementById("search").value)'>Search</button>
                
      
              </div>


        <div id="logolinks">

          <div class="dropdown">

            <img src="img/account.PNG" alt="My account" height="30" width="30">
          
                <div class="dropdown-content">

                  <a href="login.php">Sign IN</a>
                  <a href="signup.php">Sign UP</a>

                </div>
   
           </div>

            <a href="javascript:alert('You must be logged in in order to use this feature!')"><img src="img/favorites.PNG" alt="Favorites" height="30" width="30"></a>
            <a href="javascript:alert('You must be logged in in order to use this feature!')"><img src="img/cart.PNG" alt="Shopping cart" height="30" width="30"></a>

        </div>

      </div> 


    <div id="container">


      <div class="sidebar">

            <h4>Product categories</h4>

            <a href='javascript:showContent("cpu")'>CPU</a>
            <a href='javascript:showContent("motherboard")'>Motherboards</a>
            <a href='javascript:showContent("gpu")'>GPU</a>
            <a href='javascript:showContent("ram")'>RAM</a>
            <a href='javascript:showContent("storage")'>Storage</a>
            <a href='javascript:showContent("psu")'>Power supplies</a>
            <a href='javascript:showContent("case")'>Cases</a>
            
      </div>



      <div id ="pageinfo">


              <!-- Slideshow container -->
        <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <img src="img/img1.jpg" style="width:800px; height:300px;">
        </div>

        <div class="mySlides fade">
          <img src="img/img2.jpg" style="width:800px; height:300px;">
        </div>

        <div class="mySlides fade">
          <img src="img/img3.jpg" style="width:800px; height:300px;">
        </div>

        <div class="mySlides fade">
          <img src="img/img4.png" style="width:800px; height:300px;">
        </div>

        </div>





        <h2>Welcome to SGImag!</h2>

        <p>The one and true place for online PC parts shopping!</p>
        <p>We are currently offering a wide range of last gen CPUs, GPUs, MOBOs and many more!</p>
        <p>Head over to your preffered section and take a look at our finest products.</p>

        <img src="img/hardware.jpg" style="width:800px; height:300px;">



        <table width="800" border="0" cellpadding="5">

          <tr>
          
          <td align="center" valign="center">
          <a href="https://www.amd.com/en"><img src="img/amd_logo.png" alt="description here" style="width:60px; height:60px;"/></a>
          <br />
          </td>
          
          <td align="center" valign="center">
          <a href="https://www.nvidia.com/en-us/"><img src="img/nvidia_logo.png" alt="description here" style="width:60px; height:60px;"/> </a>
          <br />
          </td>

          <td align="center" valign="center">
            <a href="https://www.intel.com/content/www/us/en/homepage.html"><img src="img/intel_logo.png" alt="description here" style="width:60px; height:60px;"/></a>
            <br />
          </td>
          
          <td align="center" valign="center">
            <a href="https://www.msi.com/index.php"><img src="img/msi_logo.png" alt="description here" style="width:60px; height:60px;"/></a>
            <br />
          </td>

          <td align="center" valign="center">
            <a href="https://rog.asus.com/"><img src="img/rog_logo.png" alt="description here" style="width:60px; height:60px;"/></a>
            <br />
          </td>

          </tr>
          
          </table>


  </div>

</div>

</body>

</html> 