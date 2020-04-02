<?php


include 'db_connection.php';


    try{
        $pdo = openConnection();
        echo "<h3>Connected Successfully</h3>";
    } catch (PDOException $e){
        echo "<h3> Connection failed</h3>";
        die($e->getMessage());
    }

    $ban_status =$_POST['ban_status'];
    $nickn=$_POST['nickn'];
    $title=$_POST['title'];
    $body=$_POST['body'];
    $id=$_POST['id'];

 
    
$sql="UPDATE login SET ban =  $ban_status WHERE nickname = '$nickn'";
$sql2="UPDATE post_info SET title='$title',body='$body' WHERE nickname = '$nickn' and postID=$id";

$result = $pdo->exec($sql);
$result2 = $pdo->exec($sql2);

if($result){
    return 'data updated';
}


?>