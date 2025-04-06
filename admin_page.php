<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

   <!-- Navigation Bar -->
   <!-- <nav style="
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
   </nav> -->

   <!-- Main Container -->
   <div class="container" style="padding-top: 100px;">

      <div class="content">
         <h3>hi, <span>admin</span></h3>
         <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
         <p>this is an admin page</p>
         <a href="login_form.php" class="btn">login</a>
      <a href="index.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>

         <!-- Removed logout button here since it's now in the navbar -->
      </div>

   </div>

</body>

</html>