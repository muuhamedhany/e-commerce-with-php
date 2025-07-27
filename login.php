<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login-signup.css">
    <link rel="stylesheet" href="./css/all.css">
</head>
<body>
 
    <header class="navbar">
        <div class="logo">
            <a href=""><img src="./IMG/logo.png" alt="Logo"></a>
        </div>

        <nav>
            <ul class="auth-links">
                <li>
                    <a style="font-weight: 900;" href="./login.php">LOGIN</a>
                </li>

                <li>
                    <a href="./signup.php">SIGN UP</a>
                </li>

                
            </ul>
        </nav>
    </header>



    <main>
<div class="signup">
    <div class="signup-cont">
        <h1>LOGIN</h1>
        <form action="">
            <table>
                <tr>
                    <td class="td">USERNAME:</td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="username" id="username" placeholder="Enter your username">
                    </td>
                </tr>
                
                <tr>
                    <td class="td">PASSWORD:</td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="password" id="password" placeholder="Enter your password">
                    </td>
                </tr>
                
        
            </table>
            <input type="submit" name="login-btn" value="LOGIN">

<?php

if( isset( $_GET['login-btn'] ) )
{
    $user  = $_GET['username'];
    $pwd  = $_GET['password'];

    $conn = mysqli_connect('localhost','root','','project');

    $stmt = "SELECT `username`,`password` FROM `users`
             WHERE `username` = '$user' AND `password` = '$pwd'";

        $result = mysqli_query( $conn, $stmt );

        if($row = mysqli_fetch_array($result))
        {
            if( $row[0] == 'admin' && $row[1] == 'admin123')
            {
                header("Location: ./admin/AdminPage.php");
            }
                
            else
            {
                header("Location: ./products.php");    
            }
        }

        else echo"<br><br>Invalid username or password!";

}

?>
        </form>
        
    </div>
</div>

</main>

<footer class="footer">
    <p>&copy; 2024 PHONESTORE</p>
  </footer>
    
</body>
</html>