
<!-- NAME: AARSH PARIMAL PATEL
STUDENT ID:200520260
MAIN-PROJECT -->

<!-- This is the code for our logout, this will be executed when the user decides to log out -->
<?php
session_start();
session_unset();
session_destroy();
// after logout the user will be redirected to the home page
header('location:index.php?msg17=loggedout');
?>
<!-- end of the code -->
