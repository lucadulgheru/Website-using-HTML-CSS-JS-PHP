<!DOCTYPE html>

<html>

<head>

</head>


<body>

<?php

          session_start();

          require "utils/config.php";

          $keyword = $_GET['keyword'];

          $sql = "SELECT * FROM products WHERE brand LIKE '%".$keyword."' OR model LIKE '%".$keyword."'";

          $result = $conn->query($sql);

          $currentrow = 0;

          echo "<table><tr>";

          if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {

                if( ($currentrow) % 3 == 0){



                echo '
                
                </tr><tr><td>
                
                <div class="card">

                <img src="img/'.$row["category"].'/'.$row["model"].'.jpg" alt="Product" style="width:150px; height:100px;">
                <h1>'.$row["brand"].'</h1>
                <h2>'.$row["model"].'</h2>
                <p>'.$row["description"].'</p>
                <p class="price">$'.$row["price"].'</p>
                <p class="stock">ITEM STOCK</p>
                <p><button>Add to Cart</button></p>
                <p><button>Add to Favorites</button></p>
  
                     </div>


                  </td>';

            }

                else {



                  echo '
                
                  <td>
                  
                  <div class="card">
  
                  <img src="img/'.$row["category"].'/'.$row["model"].'.jpg" alt="Product" style="width:150px; height:100px;">
                  <h1>'.$row["brand"].'</h1>
                  <h2>'.$row["model"].'</h2>
                  <p>'.$row["description"].'</p>
                  <p class="price">$'.$row["price"].'</p>
                  <p class="stock">ITEM STOCK</p>
                  <p><button>Add to Cart</button></p>
                  <p><button>Add to Favorites</button></p>
    
                       </div>
  
  
                    </td>';

                }

                $currentrow++;
        } 


      }
        
        ?>


    </body>

    </html>