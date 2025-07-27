<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
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

        .prod1 {
            background-color: #703553;
            margin-bottom: 50px;
            margin-top: 50px;
        }

        table {
            font-size: 23px;
            border-radius: 10px;
        }

        .table1, tr {
            width: 500px;
        }

        .td1 {
            text-align: center;
            border: solid 3px #612c46;
            border-radius: 5px;
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
            <a href="./AdminPage.php"><img src="../IMG/logo.png" alt="Logo"></a>
        </div>
        <nav>
            <ul class="auth-links">

                <li>
                    <a style="font-weight: 900;" href="./AdminPage.php">HOME</a>
                </li>

                <li>
                    <a href="./products(admin).php">PRODUCTS</a>
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
                <h1>WEBSITE MANAGEMENT</h1>

                <div class="prod-cont">
                    <div class="prod1">

                    <a style="margin-right: 25px;" class='btn' href="./products(admin).php">SHOW ALL PRODUCTS</a>
                    <a style="margin-left: 25px;" class='btn' href="./users(admin).php">SHOW ALL USERS</a>   

                    </div>

                </div>
            </div>
        </div>

    </main>



</body>

</html>