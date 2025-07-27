<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Management</title>
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
                    <a href="./products(admin).php">PRODUCTS</a>
                </li>

                <li>
                    <a style="font-weight: 900;" href="./users(admin).php">USERS</a>
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

    $stmt = "SELECT * FROM `users` WHERE `user_id` = $id";
    $result = mysqli_query($conn, $stmt);

    if ($row = mysqli_fetch_array($result)) {
        echo "
        <form action='' method='GET'>
            <table>
                <tr>
                    <td><label for='name'>Name:</label></td>
                </tr>
                <tr>
                    <td><input style='margin-bottom:15px;' type='text' class='name' name='name' value='$row[1]'></td>
                </tr>
                <tr>
                    <td><label for='email'>Email:</label></td>
                </tr>
                <tr>    
                    <td><input style='margin-bottom:15px;' type='email' class='email' name='email' value='$row[2]'></td>
                </tr>
                <tr>
                    <td><label for='pwd1'>Password:</label></td>
                </tr>
                <tr>    
                    <td><input style='margin-bottom:15px;' type='text' class='pwd' name='pwd1' value='$row[3]'></td>
                </tr>
                <tr>
                    <td><label for='pwd2'>Confirm Password:</label></td>
                </tr>
                <tr>    
                    <td><input type='text' class='pwd' name='pwd2' placeholder='Confirm Password'></td>
                </tr>
            </table>
            <input type='hidden' name='id' value='$id'>
            <input type='submit' name='btn' value='SUBMIT EDIT'>
        </form>";

        if (isset($_GET['btn'])) {
            $name = $_GET['name'];
            $email = $_GET['email'];
            $pwd = $_GET['pwd1'];
            $co_pwd = $_GET['pwd2'];

            if ($pwd != $co_pwd) {
                echo "<p style='margin-bottom:10px;'>Passwords Mismatch!</p>";
            } else {
                $stmt2 = "UPDATE `users` SET `username` = '$name', `email` = '$email', `password` = '$pwd' WHERE `user_id` = '$id'";

                $result2 = mysqli_query($conn,$stmt2);

                if ( $result2 == TRUE ) {
                    header("Location: ./users(admin).php");
                    exit;       
                } else {
                    echo "<p style='margin-bottom:10px;'>Error updating user details.</p>";
                }
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