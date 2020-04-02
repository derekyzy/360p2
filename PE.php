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

//   include 'db_connection1.php';
//   try{
//       $pdo = openConnection();
    
//   } catch (PDOException $e){
//       die($e->getMessage());
//   }
//   $sql="select * from post_info where type1=1";
//   $result = $pdo->query($sql);
 
//   while ($row = $result->fetch()) {
//       echo $row['title'];
//       echo "<br/>";
//   }

?>



<!DOCTYPE html>
<html>
<head lang="en">
   <meta charset="utf-8">
   <title>PE</title>
   <link rel="stylesheet" href="css/PE.css" />
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
<main>
    <img id = "teams" src = "img/Teams.png" alt = "teams">
    <p id = "mamba">Mamba out<p>
    <img id = "kobe" src = "img/kobe.jpg" alt = "kobe">

        <div id="botton">

            <!-- <div class="entry">
                <figure>
                   <img src="img/news1.png" alt="" />
                </figure>
                <div> -->


 <form method="post" action="">
                <div class="search-container">
                 <form action="/action_page.php">
                  <input type="text" placeholder="Search.." name="search">
                  <button type="submit" action="">submit</button>
                     </form>
                 </div>



                

                <?php
                
                    include 'db_connection1.php';
                            try{
                             $pdo = openConnection();
    
                   } catch (PDOException $e){
                         die($e->getMessage());
                       }
                  
                    $searchFor ='%'.$_POST['search'].'%';
                    

                    $sql="select * from post_info where type1=1 and title like ?";

                    $statement=$pdo->prepare($sql);
                    $statement->bindValue(1,$searchFor);
                      $statement->execute();


                   

                   while ($row = $statement->fetch()) {
                   
                ?>
                     <h2><?php  echo $row['title'];?></h2>

                     <p><?php  echo $row['body'];?></p>
                   <div class="right">
                      <a href="discussion.html" class="linkbutton">Discuss rightnow!</a>
                   </div>
                </div>
             </div>

                    
             <?php
                  }
            ?>

             <!-- <div class="entry">
                <figure>
                   <img src="img/news2.png" alt="" />
                </figure>
                <div>
                   <h2>SiaKam talks guarding Kawhi, new ASG format</h2>
                   <p>Raptors forward Pascal Siakam talked about his first All-Star Game experience, how he enjoyed the new format and what it was like to guard his former teammate Kawhi Leonard in his post-game media availability.</p>
                   <div class="right">
                      <a href="discussion.html" class="linkbutton">Discuss rightnow!</a>
                   </div>
                </div>
             </div>
             <div class="entry">
                <figure>
                   <img src="img/news3.png" alt="" />
                </figure>
                <div>
                   <h2>Can Raptor hold on to No.2 seed?</h2>
                   <p>The Raptors enter the final stretch of the regular season with the second-best record in the Eastern Conference. Can they hold on to it? It won't be easy, as they have one of the hardest remaining schedules in the league.</p>
                   <div class="right">
                      <a href="discussion.html" class="linkbutton">Discuss rightnow!</a>
                   </div>
                </div>
             </div> -->


             <div class="entry">
               <a href="post.html" style="margin-right: 40%;font-size: 6em;" class="linkbutton">Post</a>
              </div> 







        </div>

                </form>
</main>
</body>

<?php

closeConnection($pdo);  

?>