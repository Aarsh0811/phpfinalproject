<!-- adding out doctype -->
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- adding the metadata -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Final Project</title>
    <meta name="description" content="Blog Website">
    <meta name="robots" content="noindex,nofollow">


        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet">
    </head>
<body class="saveadminbody">
  <!-- calling our header -->
  <?php require('./header.php'); ?>

  <div class="himg">

<img src="./assets/img/header.jpg" alt="img1">
  </div>

  <!-- Sign up form -->


<?php
require 'database.php';
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phonenum = $_POST['phonenum'];
$username = $_POST['username'];
$pass_word = $_POST['pass_word'];
$confirmpass_word = $_POST['confirmpass_word'];
$ok = true;
require 'header.php';

if(empty($fullname)){
  echo'<p>Full name Required</p>';
  $ok = false;
}

if(empty($email)){
  echo'<p>Email Required</p>';
  $ok = false;
}
if(empty($phonenum)){
  echo'<p>Phone number Required</p>';
  $ok = false;
}

if(empty($username)){
  echo'<p>Username Required</p>';
  $ok = false;
}

if((empty($pass_word))|| ($pass_word != $confirmpass_word)){
  echo'<p>Invalid password</p>';
  $ok = false;
}
if($ok){
  $pass_word = hash('sha256', $pass_word);
  $sql = "insert into admin_record (fullname, email, phonenum, username, pass_word) VALUES ('$fullname','$email', '$phonenum','$username','$pass_word')";
  $databaseConnect->exec($sql);
  echo'<section class = "success-row">';
  echo'<div>';
  echo'<h3>Admin Saved</h3>';
  echo'</div>';
  echo'</section>';
$databaseConnect = null;
}
?>
<section class="row success-back-row">
  <div>
    <p>All setup! Click the button below to sign in!</p>
    <a href="login.php">Login</a>
  </div>
</section>


  <?php require('./footer.php'); ?>

</body>
</html>
