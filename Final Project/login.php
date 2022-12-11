<!-- NAME: AARSH PARIMAL PATEL
STUDENT ID:200520260
MAIN-PROJECT -->

<!-- This is the code for the login page of our website -->
<?php
include 'database.php';
$userObj = new database();

// checking if the user entered the username and password that they registered with
if(isset($_POST['Login'])){
 $userObj->loginCheck($_POST);
 ?>
 <?php
}

?>
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


        <!-- adding  our script -->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- adding Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!-- adding our stylesheet -->
        <link href="css/styles.css" rel="stylesheet">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </head>

    <!-- adding our body -->
<body class="loginbody">

  <!-- calling our global header -->
  <?php require('./header.php'); ?>
  <main>
  <div class="himg">
<!-- adding our image -->
<img src="./img/header.jpg" alt="img1">
  </div>


<!-- displaying our alerts -->
  <?php   if (isset($_GET['msg6']) == "error2") {
    echo "<div class='alert alert-danger alert-dismissible'>
         <button type='button' class='close' data-dismiss='alert'>x</button>
         <strong>Error while logging in!!</strong>
         </div>";
    } ?>



         <section class="vh-70">
           <div class="container h-100">
             <div class="row d-flex justify-content-center align-items-center h-100">
               <div class="col-lg-12 col-xl-11">
                 <div class="card text-black" style="border-radius: 25px;">
                   <div class="card-body p-md-5">
                     <div class="row justify-content-center">
                       <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                         <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>
  <!-- adding our Login form -->
                         <form class="mx-1 mx-md-4" action="login.php" method="POST">



                           <div class="d-flex flex-row align-items-center mb-4">
                             <i class="fa-solid fa-id-card fa-lg me-3 fa-fw"></i>
                             <div class="form-outline flex-fill mb-0">
                               <!-- adding text input -->
                               <input type="text" id="username" name ="username" class="form-control" placeholder="User Name" />

                             </div>
                           </div>

                           <div class="d-flex flex-row align-items-center mb-4">
                             <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                             <div class="form-outline flex-fill mb-0">
                                <!-- adding text input -->
                               <input type="password" id="pass_word" name ="pass_word" class="form-control" placeholder="Password"/>

                             </div>
                           </div>




<!-- adding our submit button -->
                           <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                             <input type="submit" class="btn btn-primary btn-lg" name="Login" value="Login">
                           </div>

<!-- giving link to the signup page -->
<p>Not a member? <a href="signup.php">Sign-up here</a></p>
                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
<!-- adding image to our form to make it look professional -->
                <img src="./img/login.png"  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



</main>
<!-- calling our global footer -->
<?php require('./footer.php'); ?>

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
