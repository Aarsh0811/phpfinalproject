<!--
NAME : Aarsh Parimal Patel
Student ID : 200520260
Main Project -->



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


        <!--adding our scripts-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- adding Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!-- adding our link to css file-->
        <link href="css/styles.css" rel="stylesheet">
    </head>

    <!-- adding our body -->
    <body id="page-top" class="homebody">

      <!-- calling our global header -->
      <?php require('./header.php'); ?>

<!-- adding our carousels which will automatically change -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
       <div class="carousel-indicators">
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
       </div>
       <div class="carousel-inner">
         <!-- adding image -->
         <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
           <div class="carousel-caption">

             <!-- adding buttons for links -->
             <h4>Login now or Register if your are a new user!</h4>
             <div class="buttons">
            <a href="login.php" class="btn btn-login">Login</a>
            <a href="signup.php" class="btn btn-register">Sign-up</a>
             </div>
           </div>
         </div>
         <!-- adding image -->
         <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
           <div class="carousel-caption">
             <!-- adding button for our link -->
             <h4>Start your blogging journey!</h4>
            <a href="posts.php" class="btn btn-post">Start Posting</a>
           </div>
         </div>
         <!-- adding image -->
         <div class="carousel-item" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
           <div class="carousel-caption">
             <h4>View other blogs and posts!</h4>
             <p>You can also view the other existing members on our website and their posts.</p>
           </div>
         </div>
       </div>

       <!-- adding buttons to change slides which will work if the user click on the left or right of the image -->
       <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
       </button>
       <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
       </button>
      </div>

        <!-- adding our main -->
      <main>
        <section id="scroll">
              <div class="container px-5">
                  <div class="row gx-5 align-items-center">
                      <div class="col-lg-6 order-lg-2">
                          <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/bg-showcase-1.jpg" alt="..." /></div>
                      </div>
                      <!-- adding images and content to our home page to make it visually appealing -->
                      <div class="col-lg-6 order-lg-1">
                          <div class="p-5">
                              <h2 class="display-4">Learn & Grow Your Ideas...</h2>
                              <p>We provide you with a platform to learn and grow as you go further whether it's your hobby or you want to pursue a career.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

          <section>
              <div class="container px-5">
                  <div class="row gx-5 align-items-center">
                      <div class="col-lg-6">
                          <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/bg-showcase-2.jpg" alt="..." /></div>
                      </div>
                      <div class="col-lg-6">
                          <div class="p-5">
                              <h2 class="display-4">Get Noticed!</h2>
                              <p>More people come to know about your work as you start with your blogging career or hobby as our platform provides a worldwide range of audience which helps the bloggers to augment in their careers as well as get noticed.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

          <section>
              <div class="container px-5">
                  <div class="row gx-5 align-items-center">
                      <div class="col-lg-6 order-lg-2">
                          <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/bg-showcase-3.jpg" alt="..." /></div>
                      </div>
                      <div class="col-lg-6 order-lg-1">
                          <div class="p-5">
                              <h2 class="display-4">Work & Grow Together!</h2>
                              <p>We create an opportunity for bloggers to work together as a team and to collab with each other as it helps them to grow faster and gain more audience as they move further with their career.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

      </main>
      <!-- calling our global footer -->
<?php require('./footer.php'); ?>
        <!-- adding our scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
<!-- end of the code -->
