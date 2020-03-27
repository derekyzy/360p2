<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    echo "Please log in first to see this page.";
}
?>

<a href="exit.php">Exit</a>



<!DOCTYPE html>
<html>
<head lang="en">
   <meta charset="utf-8">
   <title>Forum</title>
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
    <a href="register.html" style="margin-right: 2em;" href="javascript:void(0)" class="btn_login" id="btn_showlogin">Register</a>
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








    <p style = "padding: 0 0 0 0.8em"><a href="main.php">Home</a></p>
</header>
<main>
    <a href = "PE.html"><p class = "left" >PE</p></a>   <a href = "animation.html" style="text-decoration: none;"><p class = "right" >Animation</p></a> 
    <a href = "PE.html"><img class = "left" src="img/PE.jpg" alt="PE">  </a>  

    <a href = "animation.html"><img class = "r" src="img/mio.jpeg" alt="animation"> </a>   
    <a href = "gaming.html"><p class = "left">Gaming</p></a>    <a href = "edu.html" style="text-decoration: none;"><p class = "right">Education</p></a>
    <a href = "gaming.html"> <img class = "left" src="img/Gaming.jpg" alt="gaming"> </a>   

    <a href = "edu.html"><img class = "r" src="img/educating.png" alt="education">    
</a>
</main>






</body>