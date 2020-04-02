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
    
    // $title=$_POST['title'];
    // $body=$_POST['body'];
    // $type1=$_POST['type1'];

    // include 'db_connection.php';


    // try{
    //     $pdo = openConnection();
    //     echo "<h3>Connected Successfully</h3>";
    // } catch (PDOException $e){
    //     echo "<h3> Connection failed</h3>";
    //     die($e->getMessage());
    // }

    // $sql="INSERT INTO post_info (nickName,type1,  title,body) VALUES ('a',$type1, '$title','$body')";
    // $result = $pdo->exec($sql);
   
    // echo "<br/> Data should have been now inserted <br/>";

    // $sql="select * from artworks";
    // $result = $pdo->query($sql);
   
    // switch($type1){
    //     case 1:
    //     header('Location: PE.php'); exit;break;
    //     case 2:
    //     header('Location: gaming.html');exit;break;
    //     case 3:
    //     header('Location: edu_find.html');exit;break;
    //     case 4:
    //     header('Location: animation.html');exit;break;
       
    // }


    
    // closeConnection($pdo);  
?> 
<!DOCTYPE html>
<html lang="en">


    <!-- <script type="text/javascript" src="js/login.js"></script> -->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>admin_page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/admin_page.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css" />
   <link type="text/css" rel="stylesheet" href="./css/login.css" />
    <script type="text/javascript" src="js/login.js"></script>
   
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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



        <h1>this is adminstrator page</h2>

   
        <fieldset> 
            <form method="post" action="">
            <p>search by name:</p>
                <div class="search-container">
                 
                  <input type="text" placeholder="Search.." name="search_name">
                  <button type="submit" action="">submit</button>
                   
                 </div>
    </from>




    <form method="post" action="">
                 <p>search by email:</p>
                 <div class="search-container">
                 
                  <input type="text" placeholder="Search.." name="search_email">
                  <button type="submit" action="">submit</button>
                     
                 </div>
     </form>

      <form method="post" action="">
                 <p>search by post:</p>
                 <div class="search-container">
                 
                  <input type="text" placeholder="Search.." name="search_post">
                  <button type="submit" action="">submit</button>
                   
                 </div>
    </form>



     
                 <?php
    include 'db_connection.php';
    try{
        $pdo = openConnection();

} catch (PDOException $e){
    die($e->getMessage());
  }


  if(isset($_POST['search_name'])){
    $searchFor ='%'.$_POST['search_name'].'%';
     $sql="SELECT * FROM login, post_info where login.nickname=post_info.nickName and login.nickname like ?";
    $statement=$pdo->prepare($sql);
    $statement->bindValue(1,$searchFor);
    $statement->execute();
  }
  else if(isset($_POST['search_email'])){
    $searchFor ='%'.$_POST['search_email'].'%';
     $sql="SELECT * FROM login, post_info where login.nickname=post_info.nickName and login.username like ?";
    $statement=$pdo->prepare($sql);
    $statement->bindValue(1,$searchFor);
    $statement->execute();
  }
  else if(isset($_POST['search_post'])){
    $searchFor ='%'.$_POST['search_post'].'%';
     $sql="SELECT * FROM login, post_info where login.nickname=post_info.nickName and post_info.title like ?";
    $statement=$pdo->prepare($sql);
    $statement->bindValue(1,$searchFor);
    $statement->execute();
  }
  
  
  else{
 
    $sql="SELECT * FROM login, post_info where login.nickname=post_info.nickName";
    $statement=$pdo->query($sql);
    $statement->execute();

    

}

    
?>    
<table >
  <tr>
    <th>nickname</th>
    <th>email</th>
    <th>post</th> 
    <th>context</th>
    <th>status</th>
    <th>update</th>
  </tr>

      
 <?php while ($row = $statement->fetch()) {
             ?>
          <tr id="<?php echo $row['postID'];?>">     
          
    <td data-target="N_name"><?php  echo $row['nickName'];?></td>
    <td><?php  echo $row['username'];?></td>
    <td data-target="title"><?php  echo $row['title'];?></td>
    <td data-target="context"><?php  echo $row['body'];?></td>
    <td data-target="ban"><?php  echo $row['ban'];?></td>
    <td ><a href="#" data-role="update" data-id="<?php echo $row['postID'];?>" >update</a></td>

  </tr>
 
 <?php }
             ?>

</table>
      
    </fieldset>
        </form>
        

        <div id="myModal" class="modal fade" role="dialog">
       <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update</h4>
      </div>
      <div class="modal-body">
      


     
      <div class="form-group">
      <label>nickname</label>
      <input type="text" id="name1" class="form-control">
      </div>

      <div class="form-group">
      <label>title</label>
      <input type="text" id="title" class="form-control">
      
      <div class="form-group">
      <label>context</label>
      <input type="text" id="body" class="form-control">
      
     
      <div class="form-group">
      <label>status(0:normal/1:banned)</label>
      <input type="text" id="status" class="form-control">
   
    
      <div class="form-group">
      <label>id</label>
      <input type="text" id="userId" class="form-control">
    


      <div class="modal-footer">
        <a href="#" id="save"class="btn btn-primary pull-right">update</a>
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

	</body>
  
  <script>
    $(document).ready(function(){
      $(document).on('click','a[data-role=update]',function(){

  
      var id=$(this).data('id'); 
      var name=$('#'+id).children('td[data-target=N_name]').text();
      var title=$('#'+id).children('td[data-target=title]').text();
      var body=$('#'+id).children('td[data-target=context]').text();
      var status=$('#'+id).children('td[data-target=ban]').text();
    
      $('#name1').val(name);
      $('#title').val(title);
      $('#status').val(status);
      $('#userId').val(id);
      $('#body').val(body);
      $('#myModal').modal('toggle');
   });

     $('#save').click(function(){
        
          var id=$('#userId').val();
          var name2=$('#name1').val();
          var status2=$('#status').val();
          var title2=$('#title').val();
          var body2=$('#body').val();
        $.ajax({
      

          url:  'update.php',   
          method: "post",  
          
          data:{
            nickn:name2,ban_status:status2,title:title2,body:body2,id:id
          },
          success: function(response){
            $('#'+id).children('td[data-target=N_name]').text(name2);
            $('#'+id).children('td[data-target=title]').text(title2);
              $('#'+id).children('td[data-target=ban]').text(status2);
              $('#'+id).children('td[data-target=context]').text(body2);
              $('#myModal').modal('toggle');
          }
   

    });

        });
      });

  </script>


  
</html>


<!-- refrence from youtube video: https://www.youtube.com/watch?v=aujNp92p0Uc&t=620s -->