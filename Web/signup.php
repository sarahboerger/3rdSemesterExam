<?php
    session_start();
    require_once 'include/dbh.inc.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamesite</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="" style="height:50px;width:50px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
            </li>


            <?php
              if (isset($_SESSION["usersUid"])) {
                  echo "<li><a class='nav-link' href='includes/logout.inc.php'>Log out</a></li>";
              }
              else {
                  echo "<li><a class='nav-link' href='signup.php'>Sign up</a></li>";
                  echo "<li><a class='nav-link' href='login.php'>Log in</a></li>";
              }
              ?>

          </ul>
        </div>
      </nav>


<div class="container signup-form">
  <center>
    <h2>Sign up</h2>
    <p>Fill out all input fields</p>
    </center>  


    <div class="col">
        
    <form action="include/signup.inc.php" method="post">
            <div class="form-row">

            <div class="form-group">
                <label for="inputAddress">Name</label>
                <input type="text" name="name" class="form-control" id="inputName" placeholder="Full Name...">
            </div>
<br>
            <div class="form-group">
                <label for="inputAddress">Email</label>
                <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email...">
            </div>
<br>
            <div class="form-group">
                <label for="inputCity">Username</label>
                <input type="text" name="uid"  class="form-control" id="inputUsername" placeholder="Username...">
                </div>
<br>
            <div class="row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Password</label>
                <input type="password" name="pwd" class="form-control" id="inputPassword4" placeholder="Password...">
                </div>

                <div class="form-group col-md-6">
                <label for="inputPassword4">Repeat Password</label>
                <input type="password" name="pwdrepeat" class="form-control" id="inputPassword4" placeholder="Password...">
                </div>
            </div>
            </div>
        <br>
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Sign Up</button>
        </form> 
    </div>




</div>









<?php

    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput") {
            echo "<p> Fill in all fields! </p>";
        }
        if($_GET["error"] == "invaliduid") {
            echo "<p> Try another username </p>";
        }
        if($_GET["error"] == "invalidemail") {
            echo "<p> Choose a properemail </p>";
        }
        if($_GET["error"] == "passworddontmatch") {
            echo "<p> Passwords doesn't match! </p>";
        }
        if($_GET["error"] == "stmtfailed") {
            echo "<p> Something went wrong, try again! </p>";
        }
        if($_GET["error"] == "usernametaken") {
            echo "<p> Username alredy taken! </p>";
        }
        if($_GET["error"] == "none") {
            echo "<p> You have signed up! </p>";
        }
    }

 ?>



      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
