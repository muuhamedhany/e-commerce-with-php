<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="./css/login-signup.css">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/home.css">
</head>
<body>
 
    <header class="navbar">
        <div class="logo">
            <a href="./products.php"><img src="./IMG/logo.png" alt="Logo"></a>
        </div>
        <nav>
            <ul class="auth-links">

                <li>
                    <a style="font-weight: 900;" href="./products.php">PRODUCTS</a>
                </li>

                <li>
                    <a href="./cart.php">CART</a>
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

        <h1>P R O D U C T S</h1>

            <div class="category">
                <nav>
                    <ul class="sub-cate" id="sub-cate">
        
                        <li>
                            <label>CATEGORY</label>
                        </li>

                        <li>
                            <a style="font-weight: 900; padding: 10px 10px; background-color: 1A1A1D; border-radius: 5px; color: #eeee;"  href="products.html">ALL</a>
                        </li>
        
                        <li>
                            <a href="./category/APPLE-CATEGORY.html">APPLE</a>
                        </li>

                        <li>
                            <a href="./category/SAMSUNG-CATEGORY.html">SAMSUNG</a>
                        </li>

                        <li>
                            <a href="./category/ONEPLUS-GATEGORY.html">ONE PLUS</a>
                        </li>
        
                    </ul>
                </nav>
            </div>
            
            <div class="prod-cont">
<form action="./products/iph13.php">
                <div class="prod1" id='prod1'>
                    <img style="width: 200px; padding: 30px;" src="./IMG/iphon13.jpg" alt="iphoneX">
                    <p>Apple iPhone 13</p>
                    <input type="submit" value="VIEW">
                </div>
</form>

<form action="./products/sama15.php">
                <div class="prod2">
                <img style="width: 220px; padding: 30px;" src="./IMG/samA15.jpg" alt="iphoneX">
                <p>SAMSUNG Galaxy A15</p>
                <input type="submit" value="VIEW">
                </div>
</form>

<form action="./products/onepus12.php">
                <div class="prod3">
                <img style="width: 230px; padding: 30px;" src="./IMG/oneplus12.jpg" alt="iphoneX">
                <p>OnePlus 12</p>
                <input type="submit" value="VIEW">
                </div>
</form>

            </div>        
                    
    </div>
</div>

</main>

<footer class="footer">
    <p>&copy; 2024 PHONESTORE</p>
  </footer>
    
</body>
</html>