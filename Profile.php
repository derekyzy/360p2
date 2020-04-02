<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    echo "Please log in first to see this page.";
}
?>

<a href="exit.php">Exit</a>

<?php

include 'db_connection.php';

try{
    $pdo = openConnection();
    echo "<h3 style = 'padding: 0 0 0 5em'>Conneted to the server</h3>";

}catch (PDOException $e){
    echo "<h3 style = 'padding: 0 0 0 5em'>Connection failed</h3>";
    die($e->getMessage());

}
$username = "";
$password = "";
$nickname = "";
$age = "";


if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $username = $_SESSION['username'];

    $sql = "Select username,password,nickname,age from login where username = '".$username."'";
$result = $pdo->query($sql);


    while ($row = $result->fetch()){
        $username=$row['username'];
        $password=$row['password'];
        $nickname=$row['nickname'];
        $age=$row['age'];
    }

    echo "<h3 style = 'padding: 0 0 0 5em'>Hi,$username. You can update your information here!</h3>";



} else {
    echo "<h3 style = 'padding: 0 0 0 5em'>Login first to change your information!</h3>";
}




?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta charset="utf-8">
   <title>Forum</title>
   <link rel="stylesheet" href="css/register.css" />
   <link rel="stylesheet" href="css/main.css" />
   <link type="text/css" rel="stylesheet" href="./css/login.css" />
    <script type="text/javascript" src="js/login.js"></script>
</head>
<body>
<header>            
    <h1 style="display: inline;padding: 0 0 0 0.4em">Forum</h1>
    

    <!-- main -->
<div class="main">
    <a style="margin-right: 2em;" href="javascript:void(0)" class="btn_login" id="btn_showlogin">Login</a>
    <p></p>
    <a href="register.php" style="margin-right: 2em;" href="javascript:void(0)" class="btn_login" id="btn_showlogin">Register</a>
</div>

<!-- pop up window -->
<div class="mini_login" id="mini_login">
    <!-- biaodan -->
<form action="processLogin.php" method="post">
    <div class="item firstLine" id="firstLine">
        <span class="login_title">Login</span>
        <span class="login_close" id="close_minilogin">X</span>
    </div>
    <div class="item">
        <label>user:</label>
        <input type="text" name="username" />
    </div>
    <div class="item">
        <label>pass:</label>
        <input type="password" name="password" />
    </div>
    <div class="item" style = 'padding: 0 0 0 6em'>
        <input  type="submit" text="Login in Rightnow!" class="btn_login" /> 
        
    </div>
</form>
</div>
<!-- cover -->
<div class="cover"></div>








    <a style = "padding: 0 0 0 0.8em" onclick="myFunction()">Home</a>

<script>
function myFunction() {
  var txt;
  var r = confirm("Are you sre you want to leave the page without saving?");
  if (r == true) {
    location.replace("main.php")
  } else {
  }
  
}
</script>

</header>

<body>

<form method="POST" action="processProfile.php" enctype="multipart/form-data" style="background-color:pink;">
    <fieldset>
        <legend>Profile Details</legend>
        <p>
            <label>Username:</label>
            <input type="email" name="username" value=<?php echo "$username"  ?>   placeholder="Email address"/>
            <p><p>

            <label>Password:&nbsp</label>
            <input type="text" name="password" value=<?php echo "$password"  ?> placeholder="Enter password"/>
            <p><p>

            <label>Nickname:</label>
            <input type="text" name="nickname" value=<?php echo "$nickname"  ?> placeholder="Enter Nickname"/>
        </p>
        <p>
            <label>Which forum are you mostly interested in?</label>
            <input type="radio" name="forumLove" value="1" checked/>NBA
            <input type="radio" name="forumLove" value="2"/>Gaming
            <input type="radio" name="forumLove" value="3"/>Education
            <input type="radio" name="forumLove" value="4"/>Animation
        </p>
        <p>
            <label>Gender?</label>
            <input type="radio" name="gender" value="1" checked/>Male
            <input type="radio" name="gender" value="2"/>Female
            <input type="radio" name="gender" value="3"/>Can't tell
            
        </p>    

        <p>
            <label>Age:</label>
            <input type="number"  value=<?php echo "$age"  ?>   name="age" />
        </p>
        <p>
            <label>Profile photo:</label>
            <input type="file" name="uploadfile">
            <input type="submit" text="Submit"/>      
        </p>
        <a href = "main.php">
        <p style="float: right;">
            Home
            </p>
        </a>
    </fieldset>
</form>

</body>