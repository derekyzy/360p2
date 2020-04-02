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
   <title>Animation</title>
   <link rel="stylesheet" href="css/animation.css" />
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
<div id = "pichead" >
    <img src = "img/a1.jpg" alt="">
    <img src = "img/a2.jpg" alt="">
    <img src = "img/a3.jpg" alt="">
    <img src = "img/a4.jpg" alt="">


</div>

<div id = "rabbit" >
    <img src = "img/r1.jpg" alt="">
    <img src = "img/r2.jpg" alt="">
    <img src = "img/r3.jpg" alt="">
    <img src = "img/r4.jpg" alt="">
    <img src = "img/r5.jpg" alt="">

</div>



<video autoplay muted loop id="myVideo">
    <source src=img/video.mp4 type="video/mp4">
  </video>
  

<div id="botton">

<div class="entry">
    <figure>
       <img src="img/a2-1.png" alt="" />
    </figure>
    <div>
       <h2>Kyoto Animation fire: Arson attack at Japan anime studio kills 33</h2>
       <p>Police said the 41-year-old suspect broke into the Kyoto Animation studio on Thursday morning and sprayed petrol before igniting it.

        The suspect has been detained and was taken to hospital with injuries.
        
        Japan's Prime Minister Shinzo Abe said the incident was "too appalling for words" and offered condolences.
        
        It is one of Japan's worst mass casualty incidents since World War Two.
        
    </p>
       <div class="right">
          <a href="discussion.html" class="linkbutton">Discuss rightnow!</a>
       </div>
    </div>
 </div>

 <div class="entry">
    <figure>
       <img src="img/a2-2.jpg" alt="" />
    </figure>
    <div>
       <h2>Giving anime strength overseas</h2>
       <p>On Aug. 30, a small contingent of Japanese animation producers, animators, licensors and voice actors descended on San Jose, California, to attend the weekend’s Crunchyroll Expo, a convention run by anime streaming service Crunchyroll that’s now in its third year.</p>
       <div class="right">
          <a href="discussion.html" class="linkbutton">Discuss rightnow!</a>
       </div>
    </div>
 </div>

 <div class="entry">
    <figure>
       <img src="img/a2-3.jpg" alt="" />
    </figure>
    <div>
       <h2>Revamped Russian animation sector takes aim at global audience</h2>
       <p>In a slick Moscow loft, dozens of graphic designers peer at computers, compiling the latest scenes of “Fantasy Patrol,” a cartoon produced by Russia’s Parovoz animation studio.

        With its Netflix contracts, state-owned Parovoz — which means locomotive in Russian — is at the forefront of a resurgence of the country’s animation industry.</p>
       <div class="right">
          <a href="discussion.html" class="linkbutton">Discuss rightnow!</a>
       </div>
    </div>
 </div>
 <div class="entry">
 <a href="post.html" style="margin-right: 40%;font-size: 6em;" class="linkbutton">Post</a>
</div>
</div>




</body>
</html>