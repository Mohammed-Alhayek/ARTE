<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ARTE</title>
</head>
<body>
    <header>
        <a class="Anker" href="index.html"><img src="images/logo.jpg" alt="logo"></a> 
    
        <h1 class="tit">Arte</h1>
    
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
    <main>
        <br>
        <button class="adm"><a href="Process/logout.php" class="homeAnk">Logout</a></button>
        <table>
            <tr>
                <th>first name</th>
                <th>last name</th>
                <th>topic</th>
                <th>info</th>
            </tr>
            <?php
                include("Config/db_config.php");

                $items_query="SELECT * FROM feedback";
                $items_response= mysqli_query($connection, $items_query);
                while($data=mysqli_fetch_assoc($items_response)){
                    echo "<tr>";
                    echo "<td>".$data['fname']."</td>";
                    echo "<td>".$data['lname']."</td>";
                    echo "<td>".$data['topic']."</td>";
                    echo "<td>".$data['info']."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </main>
    <br><br>
    <footer>
        <p>
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script>
            ARTE All Rights Reserved
          </p>
    </footer>    
</body>
</html>