<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="./css/login-signup.css">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/home.css">

    <style>
        table {
            font-size: 23px;
            border-radius: 10px;
        }

        .table1,
        tr {
            width: 500px;
        }

        .td1 {
            text-align: center;
            border: solid 3px #612c46;
            border-radius: 5px;
            background-color: #e0d2de;
        }

        #tr111 {
            text-align: center;
            border: solid 3px #612c46;
            border-radius: 5px;
            font-weight: bolder;
        }

        .table1, tr, td, img {
            padding: 5px;
        }

        .table2 {
            font-size: x-large;
            font-weight: bolder;
        }

        .table2, tr {
            width: 500px;
        }

        form {
            margin: 0%;
        }

        input[type='submit'] {
            margin: 0%;
            margin-bottom: 10px;
        }

        .p {
            font-weight: bolder;
            font-size: xx-large;
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
    </style>
</head>

<body>

    <header class="navbar">
        <div class="logo">
            <a href="./products.php"><img src="./IMG/logo.png" alt="Logo"></a>
        </div>
        <nav>
            <ul class="auth-links">

                <li>
                    <a href="./products.php">PRODUCTS</a>
                </li>

                <li>
                    <a style="font-weight: 900;" href="./cart.php">CART</a>
                </li>
                
                <li>
                    <a href="./login.php">LOGOUT</a>
                </li>

            </ul>
        </nav>
    </header>

    <main>
        <div class="signup">
            <div class="signup-cont">
                <h1>CART</h1>

                <div class="prod-cont">
                    <div class="prod1">

                        <?php

                        $conn = mysqli_connect("localhost", "root", "", "project");

                        $stmt1 = "SELECT `img`,`Product name`,`Quantity`,`Price` FROM `cartitem`";
                        $result = mysqli_query($conn, $stmt1);

                        if (mysqli_num_rows($result) > 0) {
                            echo "<table class='table1'><tr id='tr111'><td>PHOTO</td><td>NAME</td><td>QUANTITY</td><td>PRICE</td></tr>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr >
                <td class='td1' id='td1'><img style='width:50px;' src='$row[0]'></td>
                <td class='td1'>$row[1]</td>
                <td class='td1'>$row[2]</td>
                <td class='td1'>$$row[3]</td></tr>";
                            }

                            echo "</table>
        <table class='table2'>
        <tr>
            <td>
            <form action='' method='POST'>
            <input style=' display: block; margin-left: 20px; width:auto;'
            type='submit' name='delete_all' value='DELETE ALL'>
            </td>";

                            if (isset($_POST['delete_all'])) {
                                $stmt2 = "DELETE FROM `cartitem`";
                                $result_del = mysqli_query($conn, $stmt2);
                                header('Location: ./cart.php');
                                exit();
                            }

                            $stmt3 = "SELECT `Price`,`Quantity` FROM `cartitem`";

                            $result_price = mysqli_query($conn, $stmt3);

                            $total = 0;

                            while ($row2 = mysqli_fetch_array($result_price)) {
                                $total += $row2['Price'] * $row2['Quantity'] ;
                            }

                            echo "<td>
        <p style='margin-bottom: 10px; text-align: end; margin-right:20px' >TOTAL: $$total</p>
        </td>
    </tr>
    </table> </form>";
                        } else {
                            echo "<p class='p'>You did not add any products yet.</p>
    <form action='./products.php' >
            <input style=' display: block; margin-left: 20px; width:auto;
            margin: 0; margin-left: 240px; margin-right: 240x; margin-bottom: 20px;'
            type='submit' name='back' value='GO BACK TO PRODUCTS'> 
    </form>";
                        }

                        ?>
                    </div>

                </div>
            </div>
        </div>

    </main>



</body>

</html>