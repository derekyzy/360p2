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

include "register-data.php";

if (empty($email)) {
   $emailMessage = 'Enter an email';
   $emailClass = 'has-error';
}
else {
   $emailMessage = '';
   $emailClass = '';
}

if (empty($password)) {
   $passwordMessage = 'Enter a password';
   $passwordClass = 'has-error';
}
else {
   $passwordMessage = '';
   $passwordClass = '';
}   

if (empty($nickname)) {
    $nicknameMessage = 'Enter your nickname';
    $nicknameClass = 'has-error';
 }
 else {
    $nicknameMessage = '';
    $nicknameClass = '';
 }   

if (empty($age)) {
    $ageMessage = 'Enter your age';
    $ageClass = 'has-error';
 }
 else {
    $ageMessage = '';
    $ageClass = '';
 }   

// if (empty($email)||empty($password)||empty($nickname)||empty($age))
//     $action = '';
// else
//     $action = 'processRegister.php';


?>







<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta charset="utf-8">
   <title>Register</title>
   <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">
   <link rel="stylesheet" href="css/register.css" />
   <link rel="stylesheet" href="css/main.css" />
   <link type="text/css" rel="stylesheet" href="./css/login.css" />
    <script type="text/javascript" src="js/login.js"></script>
   <script type="text/javascript" src="js/register.js"></script>
</head> 
<body>

<header>            
    <h1 style="display: inline;padding: 0 0 0 0.4em">Forum</h1>
    

    <!-- main -->
<div class="main">
    <a style="margin-right: 2em;" href="javascript:void(0)" class="btn_login" id="btn_showlogin">Login</a>
    <p></p>
    <a href="register.php" style="margin-right: 2em;" href="javascript:void(0)" class="btn_login" id="btn_showlogin">Register</a>
    <a href="profile.php" style="margin-right: 2em;" href="javascript:void(0)" class="btn_login" id="btn_showlogin">Edit_Profile</a>
    <a href="admin_page.php" style="margin-right: 2em;" href="javascript:void(0)" class="btn_login" id="btn_showlogin">Admin</a>
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

<form action="emailRecovery.php" method="post">
    <div class="item" style = 'padding: 0 0 0 6em'>
        <input  type="submit" value = "I forget the password" text="Login in Rightnow!" class="btn_login" /> 
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


<form method="POST" action="processRegister.php" enctype="multipart/form-data" id="mainForm">
    <fieldset>
        <legend>Registering Details</legend>
        <p>
        <div class = "<?php echo $emailClass; ?>">
            <label>Username:</label>
            <input type="email" name="username" placeholder="Email address"/>
            <p><p>
            <p class="help-block"><?php echo $emailMessage; ?></p>
        </div>

        <div class = "<?php echo $passwordClass; ?>">
            <label>Password:&nbsp</label>
            <input type="password" name="password" placeholder="Enter password"/>
            <p><p>
            <p class="help-block"><?php echo $passwordMessage; ?></p>
        </div>

        <div class = "<?php echo $nicknameClass; ?>">
            <label>Nickname:</label>
            <input type="text" name="nickname" placeholder="Enter Nickname"/>
            <p class="help-block"><?php echo $nicknameMessage; ?></p>
        </div>

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

        <div class = "<?php echo $ageClass; ?>">
        <p>
            <label>Age:</label>
            <input type="number" name="age" />
        </p>
        <p class="help-block"><?php echo $ageMessage; ?></p>
        </div>
        <p>
            <label>Profile photo:</label>
            <input type="file" name="uploadfile">
        </p>
        <p>
            <label>I accept the software license</label>
            <input type="checkbox" name="accept" class="required">

       </p>

        <p>
            <input type="submit" text="Submit"/>       <input type="reset" name="Reset"/>  
        </p>

        <a href = "main.php">
        <p style="float: right;">
            Home
            </p>
        </a>
    </fieldset>
</form>

</body>