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
	<link rel="stylesheet" href="css/edu.css"/>
	<link type="text/css" rel="stylesheet" href="./css/login.css" />
	<script type="text/javascript" src="js/login.js"></script>
	

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>education part</title>
	
	</head>

	<header>            
		<h1 style="display: inline;padding: 0 0 0 0.4em">Education Forum</h1>
		
	
		<!-- main -->
	<div class="main">
		<a style="margin-right: 2em;" href="javascript:void(0)" class="btn_login" id="btn_showlogin">Login</a>
		<p></p>
		<a href="register.php" style="margin-right: 2em;" href="javascript:void(0)" class="btn_login" id="btn_showlogin">Register</a>
	</div>
	
	<!-- pop up window -->
	<div class="mini_login" id="mini_login">
		<!-- biaodan -->
	<form action="" method="post">
		<div class="item firstLine" id="firstLine">
			<span class="login_title">Login</span>
			<span class="login_close" id="close_minilogin">X</span>
		</div>
		<div class="item">
			<label>user:</label>
			<input type="text" name="uname" />
		</div>
		<div class="item">
			<label>pass:</label>
			<input type="password" name="upwd" />
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

		<div>
			
			<nav>
				<div class="container">
				
					<div id="a">
						<a class="link_black" href="ask.html" >Ask Questions</a>
					</div>
				</div>

				<div class="container">
					
					<div id="b">
						<a class="link_black" href="edu_find.html">Find Solutions</a>
					</div>
				</div>

			</nav>

			<footer>
				<p id="c">
					&copy; Copyright  by derekYang & leoChen
				</p>
			</footer>
		</div>
	</body>
</html>
