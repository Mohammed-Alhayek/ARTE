<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/contactUs.css"/>
    <link rel="shortcut icon" href="images/logo.jpg"/>
    <title>Arte</title>
</head>
<body>
<main>
    <div class="container">
        <div class="incon">
          <h1>Contact Us</h1>
          <br>
          <h3>Tell us your recommendations to make us the best and leave us a message</h3>
        </div>
        <div class="row">
          <div class="column">
            <img src="images/logo.jpg" style="width:100%">
          </div>
          <div class="column">
            <form action="Process/add_process.php" method="GET" class="addForm">
              <label for="fname">First Name</label>
              <input type="text" id="fname" name="fname" placeholder="Your first name..">
              <label for="lname">Last Name</label>
              <input type="text" id="lname" name="lname" placeholder="Your last name..">
              <label for="topic">Your Feedback About</label>
              <select id="topic" name="topic">
                <option value="Maintenance">Maintenance</option>
                <option value="Enhancement">Enhancement</option>
                <option value="Problem">Problem</option>
              </select>
              <label for="info">More Info</label>
              <textarea id="info" name="info" placeholder="Write here..." style="height:170px"></textarea>
              <input type="submit" value="Submit" class="button-56">
              <div>
                    <?php
                        if(!empty($_GET)){
                            if(isset($_GET['Error'])){
                                echo $_GET['Error'];
                            }
                        }
                    ?>
                </div>
            </form>
          </div>
        </div>
      </div>
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