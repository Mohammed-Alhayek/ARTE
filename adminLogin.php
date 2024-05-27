<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="javaScript/javaScript.js"></script>
    <link rel="stylesheet" href="CSS/styles.css"/>
    <link rel="stylesheet" href="CSS/adminLogin.css">
    <link rel="shortcut icon" href="images/logo.jpg"/>
    <title>Arte</title>
</head>
<body>
    <header>
        <a class="Anker" href="index.html"><img src="images/logo.jpg" alt="logo"></a> 
    
        <h1 class="tit">ARTE</h1>
    
        <nav>
            <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="searchFood.html">Search for food</a></li>
            <li><a href="exploreNewRecipes.html">Explore New Recipes</a></li>
            <li><a href="contactUs.php">Contact us</a></li>
            <li><a href="adminLogin.php">Admin login</a></li>
            </ul>
        </nav>
        
    </header>
<body>
    <main>
        <section class="adminHead">
            <h1 class="h1Form3">Admin Login</h1><br>
            <form action="Process/loginProcess.php" method="post" class="adminForm">
                <label for="username">User Name</label><br>
                <input type="text" id="username" name="username"><br><br>
                <label for="password">Password</label><br>
                <input type="text" id="password" name="password"><br><br>
                <input class="button" type="submit" value="Submit">
                <div>
                <?php
                if(!empty($_GET)){
                    if(isset($_GET['error'])){
                        echo $_GET['error'];
                    }
                }
                ?>
                </div>
            </form>
        </section>
    </main>
    <footer>
    <p>
        Copyright &copy;
        <script>
          document.write(new Date().getFullYear());
        </script>
        Arte All Rights Reserved
      </p>
    </footer>
</body>
</html>
