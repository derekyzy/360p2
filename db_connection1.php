<?php
 function openConnection(){
    $connString = "mysql:host=localhost; dbname=360project";
    $user="root";
    $pass="";
    $pdo=new PDO($connString, $user, $pass);
    return $pdo;   //important to return the connection
}
function closeConnection($pdo){
    $pdo=null;
    echo "Connection now closed";
}    
?>