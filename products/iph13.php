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
            <a href="./AdminPage.php"><img src="../IMG/logo.png" alt="Logo"></a>
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
        <h1>APPLE PHONES</h1>
        <form action="">

            <div class="prod-cont">

                <div class="prod3">

                    <table>
                        <tr>
                            <td>
                                <img style="width: 220px; padding: 30px; padding-right: 0px;"
                                src="../IMG/iphon13.jpg" alt="iphone13">
                            </td>

                            <td class="p">
                                <p class="p1">Apple iPhone 13</p>
                                <br>
                                <p class="p2"> About this item

                                    <ul>
                                        <li>
                                            6.1" Super Retina XDR display. 5G Superfast downloads, high?quality streaming 
                                        </li>
                                        <li>
                                            Cinematic mode in 1080p at 30 fps. Dolby Vision HDR video recording up to 4K at 60 fps. 2X Optical zoom range 
                                        </li>
                                        <li>
                                            A15 Bionic chip. New 6-core CPU with 2 performance and 4 efficiency cores. New 4-core GPU. New 16-core Neural Engine 
                                        </li>
                                        <li>
                                            Up to 19 hours video playback. Face ID. Ceramic Shield front. Aerospace-grade aluminum 
                                        </li>
                                    </ul>
                                    
                                </p>
                
                                <?php

$conn = mysqli_connect("localhost", "root", "", "project");

if (isset($_GET['add'])) 
{
    $stmt1 = "SELECT * FROM `product` WHERE `ProductID` = '1'";
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
        
        $stmt4 = "UPDATE `product` SET `Quantity` = `Quantity` - $quantity WHERE `ProductID` = '1'";
        mysqli_query($conn, $stmt4);

        header("Location: ./iph13.php");
        exit();
    }
}

$stmt3 = "SELECT `Quantity` FROM `product` WHERE `ProductID` = '1' AND `Quantity` > 0";

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