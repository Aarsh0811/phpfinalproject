<!--
NAME : Aarsh Parimal Patel
Student ID : 200520260
Main Project -->

<?php
//to include the database file
include "database.php";
$userObj = new database();

//to update our records
if (isset($_GET['updateId']) && !empty($_GET['updateId'])) {
    $updateId = $_GET['updateId'];
    $user = $userObj->displayRecordById($updateId);
}
if (isset($_POST['Update'])) {
    $userObj->updateRecord($_POST);
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
        <!-- adding css stylesheet-->
        <link href="css/styles.css" rel="stylesheet">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </head>

    <!-- adding our body -->
<body class="updatebody">
  <!-- calling our global header -->
  <?php require('./header.php'); ?>
<main>
  <!-- adding image for our header -->
  <div class="himg">

<img src="./img/header.jpg" alt="img1">
  </div>

  <!-- to display alerts -->
  <?php   if (isset($_GET['msg7']) == "error3") {

    echo "<div class='alert alert-danger alert-dismissible'>
  <button type='button' class='close' data-dismiss='alert'>X</button>
  <strong>Error! </strong> Your data couldn't be updated!
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

                         <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Update Data</p>
                    <!-- adding our Update form -->
                         <form class="mx-1 mx-md-4" action="update.php" method="post">

                           <div class="d-flex flex-row align-items-center mb-4">
                             <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                             <div class="form-outline flex-fill mb-0">
                               <!-- adding text input -->
                               <input type="text" id="fullname" name ="ufullname" class="form-control"  value="<?php echo $user['fullname']; ?>" required="required">

                             </div>
                           </div>

                           <div class="d-flex flex-row align-items-center mb-4">
                             <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                             <div class="form-outline flex-fill mb-0">
                                <!-- adding email input -->
                               <input type="email" id="email" name ="uemail" class="form-control" value="<?php echo $user['email']; ?>" required="required">

                             </div>
                           </div>


                           <div class="d-flex flex-row align-items-center mb-4">
                             <i class="fa-solid fa-mobile fa-lg me-3 fa-fw"></i>
                             <div class="form-outline flex-fill mb-0">
                                <!-- adding telephone input -->
                               <input type="tel" id="phonenum" name ="uphonenum" class="form-control" value="<?php echo $user['phonenum']; ?>" pattern="^[0-9]{6}|[0-9]{8}|[0-9]{10}$" required="required">

                             </div>

                           </div>

                           <div class="d-flex flex-row align-items-center mb-4">
                             <i class="fa-solid fa-id-card fa-lg me-3 fa-fw"></i>
                             <div class="form-outline flex-fill mb-0">
                                <!-- adding text input -->
                               <input type="text" id="username" name ="uusername" class="form-control" placeholder="User Name" value="<?php echo $user['username']; ?>" required="required">

                             </div>
                           </div>
                           <div class="d-flex flex-row align-items-center mb-4">
                             <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                             <div class="form-outline flex-fill mb-0">
                                <!-- adding password input which will be validated with the confirm password field -->
                               <input type="password" id="pass_word" name ="upass_word" class="form-control" placeholder="Password" value="<?php echo $user['pass_word']; ?>" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.uconfirmpass_word.pattern = this.value;" required="required">

                             </div>
                           </div>

                           <div class="d-flex flex-row align-items-center mb-4">
                             <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                             <div class="form-outline flex-fill mb-0">
                               <!-- adding password input which will be validated with the prevoiys password field -->
                               <input type="password" id="confirmpass_word" name ="uconfirmpass_word" class="form-control" value="<?php echo $user['pass_word']; ?>" placeholder="Re-type password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" required="required">

                             </div>
                           </div>


                           <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                             <!-- adding id which will be hidden and cannot be edited -->
                             <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

                             <!-- adding our submit button -->
                             <input type="submit" class="btn btn-primary btn-lg" name="Update" value="Update">
                           </div>



                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
<!-- adding image to our  form to make it look professional -->
                <img src="./img/update.png"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</main>

<!-- calling global footer -->
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
