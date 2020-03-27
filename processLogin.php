<!DOCTYPE html>
<html>
<head lang="en">
   <meta charset="utf-8">
   <title>Forum</title>
   <link rel="stylesheet" href="css/main.css" />
   <link type="text/css" rel="stylesheet" href="./css/login.css" />
    <script type="text/javascript" src="js/login.js"></script>
</head>
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

<?php

$username=$_POST['username'];
$password=$_POST['password'];

include 'db_connection.php';



try{
    $pdo = openConnection();

}catch (PDOException $e){
    echo "<h3>Connection failed</h3>";
    die($e->getMessage());

}


$sql = "Select username,password,nickname from login where username = '$username'";

$result = $pdo->query($sql);

$row = $result->fetch();

        $uname = $row['username'];
        $pwd = $row['password'];
        $nickname = $row['nickname'];
        session_start();
        if($uname == $username && $pwd == $password){
            echo "<h3 style = 'padding: 0 0 0 5em'>You have logined '$username' successfully!</h3>";
            echo "<h3 style = 'padding: 0 0 0 5em'>Hi, $nickname!</h3>";
            echo "<h3 style = 'padding: 0 0 0 5em'>Enjoy your day!</h3>";
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
        }else{
            echo "<h3 style = 'padding: 0 0 0 5em'>Username & Password not match! Please go back and try again!</h3>";
        }
    

    closeConnection($pdo);


?>

