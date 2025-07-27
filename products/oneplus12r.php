<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="../css/login-signup.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/prod-rev.css">
</head>
<body>
 
<header class="navbar">
        <div class="logo">
            <a href="../products.php"><img src="../IMG/logo.png" alt="Logo"></a>
        </div>
        <nav>
            <ul class="auth-links">

                <li>
                    <a style="font-weight: 900;" href="../products.php">PRODUCTS</a>
                </li>

                <li>
                    <a href="../cart.php">CART</a>
                </li>

                <li>
                    <a href="../login.php">LOGOUT</a>
                </li>
            </ul>
        </nav>
    </header>



    <main>
<div class="signup">
    <div class="signup-cont">
        <h1>ONEPLUS PHONES</h1>
        <form action="">

            <div class="prod-cont">

                <div class="prod3">

                    <table>
                        <tr>
                            <td>
                                <img style="width: 220px; padding: 30px; padding-right: 0px;"
                                src="../IMG/oneplus12R.jpg" alt="oneplus12r">
                            </td>

                            <td class="p">
                                <p class="p1">OnePlus 12R</p>
                                <br>
                                <p class="p2">
                                    About this item

                                    <ul>
                                        <li>
                                            Comes with 6 months of Google One and 3 months of Youtube Premium with purchase of OnePlus 12R. (New accounts only for each service to qualify) 
                                        </li>
                                        <li>
                                            Premium Display: Experience the 1.5k Super Fluid AMOLED display, powered by the cutting-edge 4th Gen LTPO
                                        </li>
                                        <li>
                                            Peak Performance: The OnePlus 12R is powered by Snapdragon 8 Gen 2 with up to 16GB of RAM. 
                                        </li>
                                        <li>
                                            Fast Charging: Introducing the longest-lasting battery of any OnePlus phone! The massive 5500 mAh is powered by an 80W SUPERVOOC charger 
                                        </li>
                                    </ul>
                                
                                
                                </p>
                
                                <?php

$conn = mysqli_connect("localhost", "root", "", "project");

if (isset($_GET['add'])) 
{
    $stmt1 = "SELECT * FROM `product` WHERE `ProductID` = '8'";
    $product_result = mysqli_query($conn, $stmt1);

    while ($col = mysqli_fetch_array($product_result)) 
    {
        $prodID = $col[0];
        $name = $col[2];
        $price = $col[3];
        $img = $col[4];
    }

    $quantity = $_GET['Quantity'];

    $stmt2 = "INSERT INTO `cartitem` (`ProductID`, `Product name`, `Price`, `img`, `Quantity`) 
              VALUES ('$prodID', '$name', '$price', '$img', '$quantity')";

    $result_cartitem = mysqli_query($conn, $stmt2);

    

    if ($result_cartitem == TRUE) 
    {
        echo"<strong>$name</strong> was succesfully add to cart!";
        
        $stmt4 = "UPDATE `product` SET `Quantity` = `Quantity` - $quantity WHERE `ProductID` = '8'";
        mysqli_query($conn, $stmt4);

        header("Location: ./oneplus12r.php");
        exit();
    }
}

$stmt3 = "SELECT `Quantity` FROM `product` WHERE `ProductID` = '8' AND `Quantity` > 0";

$result = mysqli_query($conn, $stmt3);

if (mysqli_num_rows($result) > 0) 
{
    echo "<select name='Quantity'>";
    while ($row = mysqli_fetch_array($result))
    {
        for ($i = 1; $i <= $row[0]; $i++) 
        {
            echo "<option value='$i'>Quantity: $i</option>";
        }
    }
    echo "</select> <h1 style='display: contents;'>$100</h1><br>";

    echo "
    <input style='margin-bottom:20px; width:200px; margin-left:25px; margin-right:20px;'
    type='submit' name='add' value='ADD TO CART'>
    ";
} 

else 
{
    echo "<p style='font-weight: bold; font-size:xx-large;'>ITEM OUT OF STOCK</p>";
}

?>
                            </td>
                        </tr>
                    </table>

                

                
                
                 
                </div>

            </div>        
                        

                   
        
            
        </form>
        
    </div>
</div>

</main>

<footer class="footer">
    <p>&copy; 2024 PHONESTORE</p>
  </footer>
    
</body>
</html>