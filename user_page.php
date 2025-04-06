<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
<nav style="
      width: 100%;
      background: rgba(0, 0, 0, 0.7);
      padding: 15px 30px;
      position: fixed;
      top: 0;
      left: 0;
      display: flex;
      justify-content: flex-end;
      z-index: 1000;
   ">
      <a href="logout.php" class="btn" style="
         margin: 0;
         padding: 10px 25px;
         border-radius: 25px;
         background: crimson;
         color: #fff;
         text-transform: capitalize;
         box-shadow: 0 4px 10px rgba(0,0,0,0.3);
      ">Logout</a>
   </nav>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an user page</p>
      <!-- <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a> -->
      <a href="Blog.php" class="btn">Add Blog</a>
   </div>

</div>

</body>
</html>
