<!-- NAME: AARSH PARIMAL PATEL
STUDENT ID: 200520260
Main-Project -->

<!-- This is the code for the addpost page of our website which will include the form to add a post -->

<!-- adding our login check which will check if the user is logged in or not and if the user is logged in, it will give access of the page to the user -->
<?php
session_start();
if(!isset($_SESSION['id'])){
  header('location:login.php');
  exit();
}

// below is the main code that will be displayed on our page
else{
  ?>
  <?php
//to include the database file
include "database.php";
$userObj = new database();

// adding the if statement to insert the data when the user clicks the Add Post button
if (isset($_POST['AddPost'])) {
    $userObj->insertPostData($_POST);
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


        <!-- Adding our script-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Adding Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!-- adding link to our css file -->
        <link href="css/styles.css" rel="stylesheet">
          <!-- Adding our script-->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </head>

    <!-- adding our body -->
    <body>

<!-- calling our global header -->
  <?php require('./header.php');?>

<!-- adding a div for our header-image -->
  <div class="himg">

<img src="./img/header.jpg" alt="img1">
  </div>

<!-- adding if statement to display error -->
  <?php   if (isset($_GET['msg10']) == "adderror") {
    echo "<div class='alert alert-danger alert-dismissible'>
         <button type='button' class='close' data-dismiss='alert'>x</button>
         <strong>Error while adding post!!</strong>
         </div>";
    } ?>

    <!-- adding our main -->
  <main>

<!-- adding our section -->
         <section class="vh-70">
           <div class="container h-100">
             <div class="row d-flex justify-content-center align-items-center h-100">
               <div class="col-lg-12 col-xl-11">
                 <div class="card text-black" style="border-radius: 25px;">
                   <div class="card-body p-md-5">
                     <div class="row justify-content-center">
                       <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                         <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Add post</p>

<!-- adding our form -->
                         <form class="mx-1 mx-md-4" action="addpost.php" method="POST">


<!-- adding our icons and inputs -->
                           <div class="d-flex flex-row align-items-center mb-4">
                             <i class="fa-solid fa-heading fa-lg me-3 fa-fw"></i>
                             <div class="form-outline flex-fill mb-0">
                               <!-- adding text input -->
                               <input type="text" id="title" name ="title" class="form-control" placeholder="Add a title for your post" required="required">

                             </div>
                           </div>

                           <div class="d-flex flex-row align-items-center mb-4">
                             <i class="fa-solid fa-pen-nib fa-lg me-3 fa-fw"></i>
                             <div class="form-outline flex-fill mb-0">
                               <!-- adding text input -->
                               <input type="text" id="author" name ="author" class="form-control" placeholder="Author Name" required="required">

                             </div>
                           </div>
                           <div class="d-flex flex-row align-items-center mb-4">
                             <i class="fa-sharp fa-solid fa-file-lines fa-lg me-3 fa-fw "></i>
                             <div class="form-outline flex-fill mb-0">
                               <!-- adding text-area input -->
                       <textarea class="form-control" id="content" name ="content" class="form-control" placeholder="Write your content here..." required="required" rows="4" cols="8"></textarea>

                            </div>


                             </div>




<!-- adding our submit button -->
                           <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                             <input type="submit" class="btn btn-primary btn-lg" name="AddPost" value="Add Post">
                           </div>



                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
<!-- adding an image to our form to give it a professional look -->
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"  class="img-fluid" alt="Sample image">

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
<?php require 'footer.php'; ?>
<!-- adding our scripts-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<?php
}
?>
<!-- end of the add post page -->
