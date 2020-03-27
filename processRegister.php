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
    <div class="item">
        <a href="main.php" class="btn_login" onclick="">Login in Rightnow!</a>
    </div>
</form>
</div>
<!-- cover -->
<div class="cover"></div>








    <p style = "padding: 0 0 0 0.8em"><a href="main.php">Home</a></p>
</header>
<body>
<?php

    $username=$_POST['username'];
    $password=$_POST['password'];
    $nickname=$_POST['nickname'];
    $forumLove=$_POST['forumLove'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];

    include 'db_connection.php';

    try{
        $pdo = openConnection();
        echo "<h3 style = 'padding: 0 0 0 5em'>Conneted to the server</h3>";

    }catch (PDOException $e){
        echo "<h3 style = 'padding: 0 0 0 5em'>Connection failed</h3>";
        die($e->getMessage());

    }

    $sql = "Insert Into login (username,password,nickname,forumLove,gender,age) Values ('$username','$password','$nickname','$forumLove','$gender','$age')";
    $result = $pdo->exec($sql);

    // $sql2 = "Select * from login";
    // $result = $pdo->query($sql2);

    // while ($row = $result->fetch()){
    //     echo $row['username'] . "-" . $row['password'] . "-" . $row['nickname'] . "-" . $row['forumLove'] . "-" . $row['gender'] . "-" . $row['age'];
    //     echo "<br/>";
    // }


    closeConnection($pdo);
    
    echo "<h3 style = 'padding: 0 0 0 5em'>You Have Registered Successfully</h3>";

?>
</body>