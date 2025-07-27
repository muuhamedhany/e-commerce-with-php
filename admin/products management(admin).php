<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Management</title>
    <link rel="stylesheet" href="../css/login-signup.css">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/home.css">

    <style>
        .btn {
            font-size:xx-large;
            font-family:'Trebuchet MS';
            width: 65%;
            padding: 25px;
            font-weight: bold;
            cursor: pointer;
            color: #EEEEEE;
            background-color: 1A1A1D;
            border: none;
            border-radius: 10px;
            text-decoration: none;
            color: #EEEEEE;
        }

        .btn:hover {
            background-color:#3B1C32;
            transition: 1s;
        }

        table {
            font-size: 20px;
            color: #EEEEEE;
            border-radius: 10px;
            padding: 30px;
            padding-bottom: 10px;
        }

        .td1 {
            text-align: center;
            border: solid 3px #612c46;
            border-radius: 5px;
            padding-left: 20px;
            padding-right: 20px;
            font-size: 15px;
        }

        #tr1 {
            text-align: center;
            font-weight: bold;
        }

        .table2 {
            font-size: x-large;
            font-weight: bolder;
        }

        .table2,
        tr {
            width: 500px;
        }

        form {
            margin: 0%;
        }

        input[type='submit'] {
            margin: 0%;
            margin-bottom: 30px;
        }

        .p {
            font-weight: bolder;
            font-size:medium;
            padding: 100px;
        }

        input[name='back'] {
            display: block;
            width: auto;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
            text-align: center;
        }

        .name , .email , .pwd {
            width: 300px;
            height: 40px;
            border-radius: 6px;
            border: solid 3px #612c46;
        }

        input[type='submit'] {
            margin:0px;
            margin-bottom: 0px;
            width:40%;

        }

        select {
            margin-left: 10px;
            margin-bottom: 0;
            font-size: smaller;
            padding-right: 97;
        }
    </style>
</head>

<body>

    <header class="navbar">
        <div class="logo">
            <a href="./AdminPage.php"><img src="../IMG/logo.png" alt="Logo"></a>
        </div>
        <nav>
            <ul class="auth-links">

                <li>
                    <a href="./AdminPage.php">HOME</a>
                </li>

                <li>
                    <a style="font-weight: 900;" href="./products(admin).php">PRODUCTS</a>
                </li>

                <li>
                    <a href="./users(admin).php">USERS</a>
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

            <?php

$conn = mysqli_connect("localhost", "root", "", "project");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = "SELECT * FROM `product` WHERE `ProductID` = $id";
    $result = mysqli_query($conn, $stmt);

    if ($row = mysqli_fetch_array($result)) {
        echo "
        <form action='' method='GET'>
            <table>
                
                <tr>
                    <td><label for='name'>Product Name:</label></td>
                </tr>
                <tr>    
                    <td><input style='margin-bottom:15px;' type='text' class='name' name='name' value='$row[2]'></td>
                </tr>
                <tr>
                    <td><label for='price'>Price:</label></td>
                </tr>
                <tr>    
                    <td><input style='margin-bottom:15px;' type='text' class='name' name='price' value='$row[3]'></td>
                </tr>
                <tr>
                    <td><label for='img'>Image Location:</label></td>
                </tr>
                <tr>    
                    <td><input style='margin-bottom:15px;' type='text' class='name' name='img' value='$row[4]'></td>
                </tr>
                <tr>
                    <td><label for='quantity'>Quantity:</label></td>
                </tr>
                <tr>    
                    <td><input style='margin-bottom:15px;' type='text' class='name' name='quantity' value='$row[5]'></td>
                </tr>

                <tr>
                    <td><label for='category'>Category:</label>";
                    $stmt3 = "SELECT * FROM `category`";

                    $result_cate = mysqli_query($conn, $stmt3);
                
                    echo"<select name='category'>";
                    while( $row1 = mysqli_fetch_array($result_cate))
                    {
                        echo"<option value='$row1[0]'>$row1[1]</option>";
                    }
                    echo"</select>"; 
                    echo"</td>
                </tr>
                
                
            </table>
            <input type='hidden' name='id' value='$id'>
            <input type='submit' name='btn' value='SUBMIT EDIT'>
        </form>";

        if (isset($_GET['btn'])) {
            $name = $_GET['name'];
            $price = $_GET['price'];
            $img = $_GET['img'];
            $quantity = $_GET['quantity'];
            $category = $_GET['category'];

            
            
                $stmt2 = "UPDATE `product` SET `ProductName` = '$name',
                `Price` = '$price',
                `img` = '$img',
                `Quantity` = '$quantity',
                `CategoryID` = '$category' WHERE `ProductID` = '$id'";

                $result2 = mysqli_query($conn,$stmt2);

                if ( $result2 == TRUE ) {
                    echo "<p style='margin-bottom:10px;'>Product Updated!</p>";
                    exit;       
                } else {
                    echo "<p style='margin-bottom:10px;'>Error updating product details.</p>";
                }
            }
        }
    }


?> 

                    </table> 

                <div class="prod-cont">
                    <div class="prod1">    



                
            </div>

                </div>
            </div>
        </div>

    </main>



</body>

</html>