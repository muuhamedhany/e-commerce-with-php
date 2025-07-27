<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

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
                    <a href="./login.php">LOGIN</a>
                </li>

                <li>
                    <a style="font-weight: 900;" href="./signup.php">SIGN UP</a>
                </li>

                
            </ul>
        </nav>
    </header>
    
    <main>    
<div class="signup">
    <div class="signup-cont">
        <h1>SIGNUP</h1>
        <form action="">
            <table>
                <tr>
                    <td class="td">USERNAME:</td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="username" id="username" placeholder="Enter a username">
                    </td>
                </tr>
                <tr>
                    <td class="td">E-MAIL:</td>
                </tr>
                <tr>
                    <td>
                        <input type="email" name="email" id="email" placeholder="Enter your e-mail">
                    </td>
                </tr>
                <tr>
                    <td class="td">PASSWORD:</td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="pwd1" id="password" placeholder="Enter a password">
                    </td>
                </tr>
                <tr>
                    <td class="td">CONFIRM PASSWORD:</td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="pwd2" id="cpassword" placeholder="Re-Enter your password">
                    </td>
                </tr>
        
            </table>

            <input type="submit" name="sign-up-btn" value="CREATE ACCOUNT">
            <a class="login-btn" href="login.php">LOGIN</a> <br><br>

<?php

if( isset( $_GET['sign-up-btn'] ) )
{
    $user  = $_GET['username'];
    $email = $_GET['email'];
    $pwd1  = $_GET['pwd1'];
    $pwd2  = $_GET['pwd2'];

    $conn = mysqli_connect('localhost','root','','project');

    if( $pwd1 != $pwd2)
    { 
    echo"Password Mismatch!";
    }
    else {
        $stmt = "INSERT INTO `users` (`username`, `email`, `password`) 
                 VALUES ('$user', '$email', '$pwd1')";

        $result = mysqli_query( $conn, $stmt );
       
        echo "$user,<br> Your account was successfully created!";
    }
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