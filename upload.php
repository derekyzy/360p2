<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    echo "Please log in first to see this page.";
}
?>

<a href="exit.php">Exit</a>

<html>
<body>
		
<form method="POST" action="getdata.php" enctype="multipart/form-data">
 <input type="file" name="myimage">
 <input type="submit" name="submit_image" value="Upload">
</form>

</body>
</html>