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
    
    $title=$_POST['title'];
    $body=$_POST['body'];
    $type1=$_POST['type1'];
    $username = $_SESSION['username'];

    include 'db_connection1.php';


    try{
        $pdo = openConnection();
        echo "<h3>Connected Successfully</h3>";
    } catch (PDOException $e){
        echo "<h3> Connection failed</h3>";
        die($e->getMessage());
    }
    $sqlGetNickname = "Select nickname from login where username = '$username'";
    $resultGetNickname =  $pdo->query($sqlGetNickname);

    $row = $resultGetNickname->fetch();
    $nickName = $row['nickname'];
    

    $sql="INSERT INTO post_info (nickName,type1,  title,body) VALUES ('$nickName',$type1, '$title','$body')";
    $result = $pdo->exec($sql);
   
    echo "<br/> Data should have been now inserted <br/>";

   
    switch($type1){
        case 1:
        header('Location: PE.php'); exit;break;
        case 2:
        header('Location: gaming.html');exit;break;
        case 3:
        header('Location: edu_find.html');exit;break;
        case 4:
        header('Location: animation.html');exit;break;
       
    }


    
    closeConnection($pdo);  
?> 