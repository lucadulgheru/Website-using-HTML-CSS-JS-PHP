<!DOCTYPE html>

<html>

<head>

        <script type="text/javascript" src="js/updatecontent.js"></script>

</head>


<style>

     /* Dropdown Button */
.sortbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.sort {

  float: left;
  display: inline-block;

  margin-left: 100px;

  margin-bottom: 20px;

}

/* Dropdown Content (Hidden by Default) */
.sort-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.sort-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.sort-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.sort:hover .sort-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.sort:hover .sortbtn {background-color: #3e8e41;} 


</style>


<body>

<?php

          session_start();

          require "utils/config.php";

          $category = $_GET['category'];
          $price = 'price';

          $categorystr = "'".strval($category)."'";

          $sql = "SELECT * FROM products WHERE category='".$category."'";

          $result = $conn->query($sql);


          $currentrow = 0;


          echo $_SESSION['userid'];

          echo '
          
          <div class="sort">
          <button class="sortbtn">Sort products</button>
          <div class="sort-content">
            <a href=javascript:orderContent('.$categorystr.',"brand")>Alphabetically by brand</a>
            <a href=javascript:orderContent('.$categorystr.',"model")>Alphabetically by model</a>
            <a href=javascript:orderContent('.$categorystr.',"price")>Price ascending</a>
          </div>
        </div> 
          
          
          ';


          echo "<table><tr>";

          if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {

                if( ($currentrow) % 3 == 0){



                echo '
                
                </tr><tr><td>
                
                <div class="card">

                <form action="addtocart.php" method=get>

                <img src="img/'.$category.'/'.$row["model"].'.jpg" alt="Product" style="width:150px; height:100px;">
                <h1>'.$row["brand"].'</h1>
                <h2>'.$row["model"].'</h2>
                <p>'.$row["description"].'</p>
                <p class="price">$'.$row["price"].'</p>
                <p class="stock">ITEM STOCK</p>
                <p><button type="submit" name=product value='.$row["product_id"].'>Add to Cart</button></p>
                <p><button>Add to Favorites</button></p>

                </form>
  
                     </div>


                  </td>';

            }

                else {



                  echo '
                
                  <td>
                  
                  <div class="card">

                  <form action="addtocart.php" method=get>
  
                  <img src="img/'.$category.'/'.$row["model"].'.jpg" alt="Product" style="width:150px; height:100px;">
                  <h1>'.$row["brand"].'</h1>
                  <h2>'.$row["model"].'</h2>
                  <p>'.$row["description"].'</p>
                  <p class="price">$'.$row["price"].'</p>
                  <p class="stock">ITEM STOCK</p>
                  <p><button type="submit" name=product value='.$row["product_id"].'>Add to Cart</button></p>
                  <p><button>Add to Favorites</button></p>

                  </form>
    
                       </div>
  
  
                    </td>';

                }

                $currentrow++;
        } 

      }
        
        ?>


    </body>

    </html>