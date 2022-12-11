<!-- NAME: AARSH PARIMAL PATEL
STUDENT ID:200520260
MAIN-PROJECT -->

<!-- This is the code for the Signup page of our website -->
<?php
//to include the database file
include "database.php";
$userObj = new database();

// adding the if statement to insert the data when the user clicks the sign up button
if (isset($_POST['Sign-Up'])) {
    $userObj->insertData($_POST);
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


      <!-- adding script -->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- adding Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- adding stylesheet-->
        <link href="css/styles.css" rel="stylesheet">
    </head>

    <!-- adding our body -->
<body class="signupbody">

  <!-- calling our global header -->
  <?php require('./header.php'); ?>

<!-- adding image for our header -->
  <div class="himg">

<img src="./img/header.jpg" alt="img1">
  </div>

  <!-- to display the alerts -->
  <?php   if (isset($_GET['msg5']) == "error1") {
          echo "<div class='alert alert-danger alert-dismissible'>
          <strong>Error! </strong> Your registration was unsuccessful!
         <button type='button' class='close' data-dismiss='alert'>x</button>
         </div>";
}

if (isset($_GET['msg15']) == "signupcheck") {
       echo "<div class='alert alert-danger alert-dismissible'>
       <button type='button' class='close' data-dismiss='alert'>x</button>
       <strong>Error! </strong> An account already exists with this email or username!

      </div>";
}

?>




         <section class="vh-70">
           <div class="container h-100">
             <div class="row d-flex justify-content-center align-items-center h-100">
               <div class="col-lg-12 col-xl-11">
                 <div class="card text-black" style="border-radius: 25px;">
                   <div class="card-body p-md-5">
                     <div class="row justify-content-center">
                       <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                         <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
<!--adding our Sign up form -->
                         <form class="mx-1 mx-md-4" action="signup.php" method="POST">

                           <div class="d-flex flex-row align-items-center mb-4">
                             <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                             <div class="form-outline flex-fill mb-0">
                               <!-- adding text input -->
                               <input type="text" id="fullname" name ="fullname" class="form-control" placeholder="Full Name" required="required">

                             </div>
                           </div>

                           <div class="d-flex flex-row align-items-center mb-4">
                             <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                             <div class="form-outline flex-fill mb-0">
                                  <!-- adding text input -->
                               <input type="email" id="email" name ="email" class="form-control" placeholder="Email" required="required">

                             </div>

                           </div>

<div class="d-flex flex-row align-items-center mb-4">
  <i class="fa-solid fa-mobile fa-lg me-3 fa-fw"></i>
  <div class="form-outline flex-fill mb-0">
       <!-- adding telephone input -->
    <input type="tel" id="phonenum" name ="phonenum" class="form-control" placeholder="Phone Number" pattern="^[0-9]{6}|[0-9]{8}|[0-9]{10}$" required="required">

  </div>

</div>

                           <div class="d-flex flex-row align-items-center mb-4">
                             <i class="fa-solid fa-id-card fa-lg me-3 fa-fw"></i>
                             <div class="form-outline flex-fill mb-0">
                                  <!-- adding text input -->
                               <input type="text" id="username" name ="username" class="form-control" placeholder="Create your User Name" required="required">

                             </div>
                           </div>
                           <div class="d-flex flex-row align-items-center mb-4">
                             <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                             <div class="form-outline flex-fill mb-0">
                                  <!-- adding text input for password which will be validated with the confirm password -->
                               <input type="password" id="pass_word" name ="pass_word" class="form-control" placeholder="Create your Password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.confirmpass_word.pattern = this.value;" required="required" >

                             </div>
                           </div>

                           <div class="d-flex flex-row align-items-center mb-4">
                             <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                             <div class="form-outline flex-fill mb-0">
                               <!-- adding text input for confirm password which will be validated wit the previous password field -->
                               <input type="password" id="confirmpass_word" name ="confirmpass_word" class="form-control" placeholder="Re-type password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" required="required">

                             </div>
                           </div>


<!-- adding our submit button -->
                           <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                             <input type="submit" class="btn btn-primary btn-lg" name="Sign-Up" value="Sign-Up">
                           </div>

<!-- giving link to our login page -->
<p>Already a member? <a href="login.php">Login here</a></p>
                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
<!-- adding image to our form to make it look professional -->
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



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
