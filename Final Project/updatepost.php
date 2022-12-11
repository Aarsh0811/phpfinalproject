<!--
NAME : Aarsh Parimal Patel
Student ID : 200520260
Main Project -->

<!-- This is the code for our updatepost page of our website -->
<?php
// starting our session if the user is logged in else they will be required to login
session_start();
if(!isset($_SESSION['id'])){
  header('location:login.php');
  exit();
}

// if the user is logged in, the page will be displayed
else{
  ?>
  <?php
//to include the database file
include "database.php";
$userObj = new database();

//to update our posts
if (isset($_GET['updatepostId']) && !empty($_GET['updatepostId'])) {
    $updatepostId = $_GET['updatepostId'];
    $user = $userObj->displayPostRecordById($updatepostId);
}
if (isset($_POST['UpdatePost'])) {
    $userObj->updatePostRecord($_POST);
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


        <!-- adding our script-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- adding our Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!-- adding our stylesheet-->
        <link href="css/styles.css" rel="stylesheet">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </head>
    <body>

      <!-- calling our global header -->
    <?php require('./header.php');?>

    <!-- adding image for our header -->
    <div class="himg">
    <img src="./img/header.jpg" alt="img1">
    </div>

    <!-- to display our alerts -->
    <?php   if (isset($_GET['msg11']) == "updateerror") {
      echo "<div class='alert alert-danger alert-dismissible'>
           <button type='button' class='close' data-dismiss='alert'>x</button>
           <strong>Error while editing post!!</strong>
           </div>";
      } ?>

      <!-- adding our main -->
        <main>
         <section class="vh-70">
           <div class="container h-100">
             <div class="row d-flex justify-content-center align-items-center h-100">
               <div class="col-lg-12 col-xl-11">
                 <div class="card text-black" style="border-radius: 25px;">
                   <div class="card-body p-md-5">
                     <div class="row justify-content-center">
                       <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                         <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Edit post</p>
                         <!-- adding our form to update post -->
                         <form class="mx-1 mx-md-4" action="updatepost.php" method="POST">

                           <div class="d-flex flex-row align-items-center mb-4">
                             <i class="fa-solid fa-heading fa-lg me-3 fa-fw"></i>
                             <div class="form-outline flex-fill mb-0">
                               <!-- adding text input -->
                               <input type="text" id="title" name ="utitle" class="form-control" value="<?php echo $user['title']; ?>" placeholder="Add a title for your post" required="required" >

                             </div>
                           </div>

                           <div class="d-flex flex-row align-items-center mb-4">
                             <i class="fa-solid fa-pen-nib fa-lg me-3 fa-fw"></i>
                             <div class="form-outline flex-fill mb-0">
                                  <!-- adding text input -->
                               <input type="text" id="author" name ="uauthor" class="form-control" value="<?php echo $user['author']; ?>" placeholder="Author Name" required="required">

                             </div>
                           </div>
                           <div class="d-flex flex-row align-items-center mb-4">
                             <i class="fa-sharp fa-solid fa-file-lines fa-lg me-3 fa-fw"></i>
                             <div class="form-outline flex-fill mb-0">
                                  <!-- adding textarea input -->
                               <textarea id="content" name ="ucontent" class="form-control" placeholder="Write your content here..." required="required" rows="4" cols="8"><?php echo $user['content']; ?></textarea>


                             </div>
                           </div>




                           <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                             <!-- adding id as it will be used to fetch a single post -->
                               <input type="hidden" name="post_id" value="<?php echo $user['post_id']; ?>">

<!-- adding submit button -->
                             <input type="submit" class="btn btn-primary btn-lg" name="UpdatePost" value="Update Post">
                           </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
<!-- adding image to our form to make it look professional -->
                <img src="./img/updatepost.png"  class="img-fluid" alt="Sample image">

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
  <!-- adding scripts-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
<?php }
 ?>
<!-- end of the code -->
