<?php
require 'database.php';
$username = $_POST['username'];
$pass_word = hash('sha256',$_POST['pass_word']);

$sql = "Select id from admin_record where username = '$username' AND pass_word = '$pass_word'";
$results = $databaseConnect->query($sql);
$count = $results->rowCount();
if($count == 1){
  echo'<p>Your are succefully logged in!!</p>';
  foreach($results as $row){
    session_start();
    $_SESSION['id'] = $row['id'];
    header('Location:view.php');
  }
}else {
  echo'<p>An error occurred while logging in!!</p>';
}
 ?>
