<!-- NAME: AARSH PARIMAL PATEL
STUDENT ID:200520260
MAIN-PROJECT -->

<!-- This is the code for our posts page of our website which will contain all the content of our posts -->

<!-- This page will be displayed even if the user is not logged in -->
<?php
  require "database.php";
  $userObj = new database();

  //adding if statement for our delete function
  if (isset($_GET['deletepostId']) && !empty($_GET['deletepostId'])) {
      $deletepostId = $_GET['deletepostId'];
      $userObj->deletePostRecord($deletepostId);
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


        <!-- adding our script -->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!--adding Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" >
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!-- adding our stylesheet -->
        <link href="css/styles.css" rel="stylesheet" >
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </head>

    <!-- adding our body -->
    <body id="page-top" class="viewbody">

      <!-- calling our global header -->
      <?php require('./header.php');?>

<!-- adding image for header -->
      <div class="himg">

    <img src="./img/header.jpg" alt="img1">
      </div>


<!-- adding main -->
<main>

  <!-- adding alerts -->
  <?php

  if (isset($_GET['msg12']) == "updatepost") {
      echo "<div class='alert alert-success alert-dismissible'>
      <strong>Success! </strong> Your post has been updated!
     <button type='button' class='close' data-dismiss='alert'>X</button>
     </div>";
  }

  if (isset($_GET['msg13']) == "deletepost") {
      echo "<div class='alert alert-success alert-dismissible'>
  <strong>Success!</strong> Your post has been deleted!
     <button type='button' class='close' data-dismiss='alert'>X</button>
     </div>";
  }
  if (isset($_GET['msg9']) == "add") {
      echo "<div class='alert alert-success alert-dismissible'>
  <strong>Success!</strong> Your post was added!
     <button type='button' class='close' data-dismiss='alert'>X</button>
     </div>";
  }
  if (isset($_GET['msg14']) == "deleteerror") {
      echo "<div class='alert alert-success alert-dismissible'>
  <strong>Error!</strong> Your post was not deleted!
     <button type='button' class='close' data-dismiss='alert'>X</button>
     </div>";
  }


  ?>

  <!-- adding button to let the user add a post if they are logged in -->
  <div class="addpost d-flex justify-content-center align-items-center mt-3" >
  <button type="button" class="btn btn-primary"><a href="addpost.php"><i class="fa-solid fa-plus"></i> Add a post</a></button>
  </div>

  <!-- adding variable to display our data -->
  <?php
  $users = $userObj->displayPostData();
  foreach ($users as $user) {
  ?>

  <section>

    <!-- displaying our content-->

                <div class="row d-flex justify-content-center align-items-center">
                          <div class="col-lg-4">
                              <div class="card mb-4">
                                  <div class="card-body text-center">
                                      <!-- This division is for our title, author and content which will be displayed at the upper section of our page -->
                                      <!-- Here I have used ID as a trigger for adding our data -->
                                      <p hidden><?php echo $user['post_id']; ?></p>

                                      <!-- for title -->
                                      <h5 class="my-3"><?php echo $user['title']; ?></h5>

                                      <!-- for author -->
                                      <p class="text-muted mb-1"><p>Author: <?php echo $user['author']; ?></p></p>

                                      <hr>

                                      <!-- for content -->
                                      <p><?php echo $user['content']; ?></p>

                                      <!-- adding button the go to our update page -->
                                      <button type="button" class="btn btn-primary"><a href="updatepost.php?updatepostId=<?php echo $user['post_id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                          </svg></a></button>

                                          <!-- adding button to delete posts -->
                                <button type="button" class="btn btn-danger"><a href="posts.php?deletepostId=<?php echo $user['post_id']; ?>"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                </svg></a></button>
                                  </div>

                              </div>
                          </div>
                      </div>




</section>
<?php
}
?>
  <!-- adding button to let the user add a post if they are logged in -->
<div class="addpost d-flex justify-content-center align-items-center" >
<button type="button" class="btn btn-primary"><a href="addpost.php"><i class="fa-solid fa-plus"></i> Add a post</a></button>
</div>

<!-- adding log out button -->
<button type="button" class="btn btn-warning"><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Log Out</a></button>

</main>

<!-- calling our global footer -->
<?php require('./footer.php'); ?>
        <!-- adding our scripts-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>
<!-- end of the code -->
