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
            font-size:medium;
            font-family:'Trebuchet MS';
            width: 65%;
            padding: 25px;
            font-weight: bold;
            cursor: pointer;
            color: #EEEEEE;
            background-color: 1A1A1D;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            color: #EEEEEE;
            padding-left: 15px;
            padding-right: 15px;
            padding-bottom: 6px;
            padding-top: 6px;
        }

        .btn:hover {
            background-color:#3B1C32;
            transition: 1s;
        }

        table {
            font-size: 23px;
            border-radius: 10px;
            width: 100%;
        }

        .table1,
        tr {
            width: 500px;
        }

        .td1 {
            text-align: center;
            font-size:smaller;
            border: solid 3px #612c46;
            border-radius: 5px;
            padding-left: 20px;
            padding-right: 20px;
        }

        #td1 {
            font-size: xx-large;
            padding: 0%;
        }

        #td2 {
            font-size: xx-large;
        }

        .table1,
        tr,
        td,
        img {
            padding: 5px;
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
            margin-bottom: 10px;
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

        input[type='submit'] {
            margin:0px; 
            width:100%;

        }

        .signup-cont {
            margin-top: 150px;
        }

        td, th {
        white-space: nowrap;
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
                <h1>ALL PRODUCTS</h1>

                <div class="prod-cont">
                    <div class="prod1">

                    <form action="./user management(admin).php">

                    <?php 
                    
                    $conn = mysqli_connect("localhost","root","","project");

                    $stmt1 = "SELECT * FROM `product`";
                    $result = mysqli_query($conn,$stmt1);

                    echo"<table class='table1'><tr id='tr1'>
                    <td>Product ID</td> 
                    <td>Category ID</td> 
                    <td>Product Name</td> 
                    <td>Price</td>
                    <td>image</td>
                    <td>Quantity</td>
                    </tr>";

                    while($row = mysqli_fetch_array($result))
                    {
                        echo"<tr><td  class='td1' id='td1'>$row[0]</td>
                         <td id='td1' class='td1'>$row[1]</td>
                         <td style=' text-align:start;' class='td1'>$row[2]</td>
                         <td id='td2' class='td1'>$row[3]</td>
                         <td class='td1'><img style='width:50px;' src='.$row[4]'></td>
                         <td id='td1' class='td1'>$row[5]</td>
                         <td class='td1'> <a class='btn ' href='./products management(admin).php?id=$row[0]'>EDIT</a></td></tr>";
                    }
                    
                    ?>
                    </table>

                </form>
            </div> 

                </div>
            </div>
        </div>

    </main>



</body>

</html>