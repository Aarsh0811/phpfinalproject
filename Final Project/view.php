<!--
NAME : Aarsh Parimal Patel
Student ID : 200520260
Main Project -->

<!-- This is the code for our View users page of our website -->

<!-- if the user is logged in the records will be shown and they will be able to update or delete the record else they will be required to login -->
    <?php
    session_start();
    if(!isset($_SESSION['id'])){
      header('location:login.php');
      exit();
    }
    else{
      require "database.php";
      $userObj = new database();

      //adding the delete function Here
      if (isset($_GET['deletedID']) && !empty($_GET['deletedID'])) {
          $deletedID = $_GET['deletedID'];
          $userObj->deleteRecord($deletedID);
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


            <!--adding script-->
            <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
            <!-- adding Google fonts-->
            <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
            <!--adding stylesheet-->
            <link href="css/styles.css" rel="stylesheet">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        </head>

        <!-- adding our body -->
        <body id="page-top" class="viewbody">

          <!-- calling our global header -->
          <?php require('./header.php');?>

<!-- adding image for our header -->
          <div class="himg">

        <img src="./img/header.jpg" alt="img1">
          </div>


<!-- adding our main -->
    <main>

      <!-- to display our alerts -->
      <?php
      if (isset($_GET['msg2']) == "update") {
          echo "<div class='alert alert-success alert-dismissible'>
          <strong>Success! </strong> Your data has been updated!
         <button type='button' class='close' data-dismiss='alert'>X</button>
         </div>";
      }

      if (isset($_GET['msg3']) == "delete") {
          echo "<div class='alert alert-success alert-dismissible'>
      <strong>Success!</strong> Your data has been deleted!
         <button type='button' class='close' data-dismiss='alert'>X</button>
         </div>";
      }
      if (isset($_GET['msg4']) == "login") {
          echo "<div class='alert alert-success alert-dismissible'>
      <strong>Success!</strong> Your login was successful!
         <button type='button' class='close' data-dismiss='alert'>X</button>
         </div>";
      }
      if (isset($_GET['msg8']) == "error4") {
          echo "<div class='alert alert-success alert-dismissible'>
      <strong>Error!</strong> Your data was not deleted!
         <button type='button' class='close' data-dismiss='alert'>X</button>
         </div>";
      }
      ?>

      <!-- adding table to display the registerd users -->
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Full Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone Number</th>
          <th scope="col">User Name</th>
          <th scope="col">Password</th>
    <th scope="col">Edit / Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $users = $userObj->displayData();
        foreach ($users as $user) {
        ?>
        <tr>
<!-- the data will be shown which was inputted in the signup page -->
          <td><?php echo $user['id']; ?></td>
          <td><?php echo $user['fullname']; ?></td>
          <td><?php echo $user['email']; ?></td>
          <td><?php echo $user['phonenum']; ?></td>
    <td><?php echo $user['username']; ?></td>
    <td><?php echo $user['pass_word']; ?></td>

    <!-- adding our update and delete buttons -->
          <td><button type="button" class="btn btn-primary"><a href="update.php?updateId=<?php echo $user['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
              </svg></a></button>
    <button type="button" class="btn btn-danger"><a href="view.php?deletedID=<?php echo $user['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
      <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
    </svg></a></button>
          </td>

        </tr>
    <?php
    }
    ?>
      </tbody>
    </table>

    <!-- adding our logout button -->
    <button type="button" class="btn btn-warning"><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Log Out</a></button>
    </main>
    <!-- adding our global footer -->
    <?php require('./footer.php'); ?>
            <!-- adding scripts-->
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
<!-- end of the code -->
