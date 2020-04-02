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







    <p style = "padding: 0 0 0 0.8em"><a href="main.php">Home</a></p>
</header>


<?php
// Contact subject
$subject = 'Recovery Email';
// Details
$message= 'Your password has been reset to 123, please use this new password to login again!';
//echo $subject;
// Mail of sender
$mail_from='maverickxiaozi@gmail.com';
$username=$_POST['username'];

if(empty($username)){
    header('Location:http://localhost/360wb/emailRecovery.php');
}else{

    include 'db_connection.php';

    try{
        $pdo = openConnection();
        echo "<h3 style = 'padding: 0 0 0 5em'>Conneted to the server $username</h3>";

    }catch (PDOException $e){
        echo "<h3 style = 'padding: 0 0 0 5em'>Connection failed</h3>";
        die($e->getMessage());

    }

    $sql = "Update login Set password = '123' Where username = '$username'";
    $result = $pdo->exec($sql);



// From
//$header="from: $name <$mail_from>";
// Enter your email address
$to =$_REQUEST['username'];
$send_contact=mail($to,$subject,$message);
// Check, if message sent to your email
if($send_contact){
echo "<h3 style = 'padding: 0 0 0 5em'>The recovery email has been sent to '$username'</h3>";
}
else {
echo "ERROR";
}

}
?>