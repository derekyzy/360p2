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
<html lang="en">
	
	
	
	<link rel="stylesheet" href="css/basic.css"/>
	<link rel="stylesheet" href="css/gaming.css"/>
	<link type="text/css" rel="stylesheet" href="./css/login.css" />
    <script type="text/javascript" src="js/login.js"></script>
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Gaming part</title>
		
		
	</head>

	<body>
		
		
		
		<div>
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
			<nav>
				<p id="b">
					<a href="#pcpart" >PC gaming</a>
				</p>
				<p id="a">
					<a href="#phonepart">mobile gaming</a>
				</p>
			</nav>

		        


			<div id="pcpart">
				<ul>
					<li><a href="https://na.leagueoflegends.com/en-us/news/game-updates/patch-10-3-notes/">league of legend patch note 10.3</a></li>
					<li><a href="">How to Refund Warcraft 3 Reforged</a></li>
					<li><a href="">tier 1 top champion(LOL)</a></li>
					<li><a href="">how to play starcraft</a></li>
					<li><a href="">need one more top player to play flex!!(LOL)</a></li>
					
				</ul>
			</div>
			
			<div id="phonepart">
				<ul>
					<li>
						<a href="">how to play zombies vs plants</a>
					</li>
					<li><a href="">some funny phone games</a></li>
					<li><a href="">top 10 free video games on iphone</a></li>
					<li><a href="">anyone wants to play HEARTHSTONE with me???</a></li>
				</ul> 
			</div>
			
			
			

			<footer>
				<p>
					&copy; Copyright  by derekYang & leoChen
				</p>
			</footer>
		</div>
	</body>
</html>
