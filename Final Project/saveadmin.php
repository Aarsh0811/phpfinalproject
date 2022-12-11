<!-- NAME: AARSH PARIMAL PATEL
STUDENT ID:200520260
MAIN-PROJECT -->

<!-- This is the code fo our saveadmin page which will be displayed if the user has successfully registered and the data has been added successfully -->

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


        <!-- adding script -->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- adding Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- adding stylesheet -->
        <link href="css/styles.css" rel="stylesheet">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </head>

    <!-- adding our body -->
<body class="saveadminbody">

  <!-- calling our global header -->
  <?php require('header.php'); ?>
<!-- adding image for our header -->
  <div class="himg">

<img src="./img/header.jpg" alt="img1">
  </div>

  <!-- to display our alerts -->
<?php
   if (isset($_GET['msg1']) == "insert") {
           echo "<div class='alert alert-success alert-dismissible'>
           <button type='button' class='close' data-dismiss='alert'>x</button>
           <strong>Success! </strong> Your registration was successful!

          </div>";
       }
?>







<section>
  <!-- adding button to go to our login page -->
  <div class="saveadminpg">
    <h2>All setup! Click the button below to login! <br><button type="button" class="btn btn-primary"><a href="login.php">Login</a></button></h2>

  </div>
</section>

<!-- calling our global footer -->
  <?php require('footer.php'); ?>

  <!-- adding scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
<!-- end of the code -->
