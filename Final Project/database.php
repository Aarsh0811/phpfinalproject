<!-- NAME: AARSH PARIMAL PATEL -->
<!-- STUDENT ID: 200520260 -->
<!-- Main Project-->

<!-- This is the code for our database file of  website -->

<!-- The below code will be used to make connection to our database-->
<?php
class database
{
    public $servername = "172.31.22.43";
    public $username = "Aarsh200520260";
    public $password = "iscV0d0erO";
    public $database = "Aarsh200520260";
    public $databaseConnect;


    // creating our connections
    public function __construct()
    {
        $this->databaseConnect = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if (mysqli_connect_error()) {
            trigger_error("Failed to connect:" . mysqli_connect_error());
        } else {
            return $this->databaseConnect;
        }
    }




    // the below is the function to insert data (Create function)
    public function insertData($post)
    {

      // the below code will check if the email or username already exists in the record and if it does, they will be promted with an error
      $email = $this->databaseConnect->real_escape_string($_POST['email']);
        $username = $this->databaseConnect->real_escape_string($_POST['username']);
      $query = "SELECT id FROM admin_record WHERE email = '$email' OR username ='$username'";
        $results = $this->databaseConnect->query($query);
        $records = mysqli_num_rows($results);
        if($records > 0) {
            foreach ($results as $row) {
                $_SESSION['id'] = $row['id'];
                header("Location:signup.php?msg15=signupcheck");
            }
        }

// otherwise the admin data will be saved and inserted in the table
     else{
      $fullname = $this->databaseConnect->real_escape_string($_POST['fullname']);
        $email = $this->databaseConnect->real_escape_string($_POST['email']);
        $phonenum = $this->databaseConnect->real_escape_string($_POST['phonenum']);
        $username = $this->databaseConnect->real_escape_string($_POST['username']);
        // the entered passwords will be hashed
        $pass_word = hash('sha256',$_POST['pass_word']);
        $confirmpass_word = hash('sha256',$_POST['confirmpass_word']);

        // adding query to insert our data
        $query = "INSERT INTO admin_record(fullname,email,phonenum, username, pass_word) VALUES ('$fullname','$email','$phonenum', '$username', '$pass_word')";
        $sql = $this->databaseConnect->query($query);

        if ($sql == true) {
          // this will display a message on the saveadmin page
        header("Location:saveadmin.php?msg1=insert");
      }
      else{
          // this will display a message on the signup page
        header("Location:signup.php?msg5=error1");

        }
    }
}



//the below is the function to check whether the username and password entered by the user matches the one they registered with
public function loginCheck()
{
  $username = $this->databaseConnect->real_escape_string($_POST['username']);
  // passwords will be hashed
  $pass_word = hash('sha256',$_POST['pass_word']);
  // adding our query
  $query = "SELECT id FROM admin_record WHERE username = '$username' AND pass_word = '$pass_word'";
    $results = $this->databaseConnect->query($query);
    $records = mysqli_num_rows($results);
    if($records > 0) {
      foreach($results as $row){
        session_start();
        $_SESSION['id'] = $row['id'];
        // if the login username and password match it will display a message on the view page and the user will be redirected to that page
        header('Location: view.php?msg4=login');
      }
    }else {
      // this will display a message on the login page
        header("Location:login.php?msg6=error2");
    }
}

    //This will fetch all the data (READ function)
    public function displayData()
    {
        // adding query to display our data
        $query = "SELECT * FROM admin_record";
        $results = $this->databaseConnect->query($query);
        if ($results->num_rows > 0) {
            $data = array();
            while ($row = $results->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {

?>
            <div class="signuppage">
                 <!-- this will be displayed if there is no data in the table -->
                <?php echo "<h2> No Users found :( </h2>"; ?>
            </div>
<?php
        }
    }


    //creating function to fetch a single row from the table (Read and Update function)
    public function displayRecordById($id)
    {
        // adding query to display our data by single row
        $query = "SELECT * FROM admin_record WHERE id = '$id'";
        $results = $this->databaseConnect->query($query);
        if ($results->num_rows > 0) {
            $row = $results->fetch_assoc();
            return $row;
        } else {
              // this will display a message on the update page
            header("Location:update.php?msg7=error3");
        }
    }

    //Creating update function
    public function updateRecord($postData)
    {
        $fullname = $this->databaseConnect->real_escape_string($_POST['ufullname']);
        $email = $this->databaseConnect->real_escape_string($_POST['uemail']);
        $phonenum = $this->databaseConnect->real_escape_string($_POST['uphonenum']);
        $username = $this->databaseConnect->real_escape_string($_POST['uusername']);
        // password will be hashed
        $pass_word = hash('sha256',$_POST['pass_word']);
        $id = $this->databaseConnect->real_escape_string($_POST['id']);

        if (!empty($id) && !empty($postData)) {
            // adding query to update our data
            $query = "UPDATE admin_record SET fullname = '$fullname', email = '$email', phonenum = '$phonenum', username = '$username', pass_word = '$pass_word'  WHERE id = '$id'";
            $sql = $this->databaseConnect->query($query);
            if ($sql == true) {
                //this will display message on the View page when the form is submitted successfully
                header("Location:view.php?msg2=update");
            } else {
              // this will display if there is any error while updating data
              header("Location:update.php?msg7=error3");
            }
        }
    }

    //Creating Delete function
    public function deleteRecord($id)
    {
        // adding query to delete our data
        $query = "DELETE FROM admin_record WHERE id = '$id'";
        $sql = $this->databaseConnect->query($query);
        if ($sql == true) {
            //this will display message on the View page when the form is submitted successfully
            header("Location:view.php?msg3=delete");
        } else {
            // this will display if there is any error while deleting data
          header("Location:view.php?msg8=error4");
        }
    }


    // the below is the function to insert data to our content page when the user is logged in
    public function insertPostData($post)
    {
        $title = $this->databaseConnect->real_escape_string($_POST['title']);
        $author = $this->databaseConnect->real_escape_string($_POST['author']);
        $content = $this->databaseConnect->real_escape_string($_POST['content']);

        // adding query to add our data

        $query = "INSERT INTO post_record(title,author,content) VALUES ('$title','$author','$content')";

        $sql = $this->databaseConnect->query($query);

        if ($sql == true) {
          //this will display message on the Posts when the form is submitted successfully
        header("Location:posts.php?msg9=add");
      }
      else{
          // this will display if there is any error while adding data
        header("Location:addpost.php?msg10=adderror");

        }
    }

    //the below is a function to display our data on the content page
    public function displayPostData()
    {
        // adding query to display our data
        $query = "SELECT * FROM post_record";
        $results = $this->databaseConnect->query($query);
        if ($results->num_rows > 0) {
            $data = array();
            while ($row = $results->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {

?>
<!-- this will display if there a no records -->
            <div class="postspage">
                <?php echo "<h2> No content found :( </h2>"; ?>
            </div>
<?php
        }
    }
    //creating function to fetch single row from the posts table
    public function displayPostRecordById($post_id)
    {
        // adding query to display our data
        $query = "SELECT * FROM post_record WHERE post_id = '$post_id'";
        $results = $this->databaseConnect->query($query);
        if ($results->num_rows > 0) {
            $row = $results->fetch_assoc();
            return $row;
        } else {
          //to display error
            header("Location:updatepost.php?msg11=updateerror");
        }
    }
    //Creating update function which will be used to update our posts if the user is logged in
    public function updatePostRecord($postData)
    {

      $title = $this->databaseConnect->real_escape_string($_POST['utitle']);
      $author = $this->databaseConnect->real_escape_string($_POST['uauthor']);
      $content = $this->databaseConnect->real_escape_string($_POST['ucontent']);
      $post_id = $this->databaseConnect->real_escape_string($_POST['post_id']);

        if (!empty($post_id) && !empty($postData)) {
            // adding query to update our data
            $query = "UPDATE post_record SET title = '$title', author = '$author', content = '$content'  WHERE post_id = '$post_id'";
            $sql = $this->databaseConnect->query($query);
            if ($sql == true) {
                //this will display message on the Posts page when the form is submitted successfully
                header("Location:posts.php?msg12=updatepost");
            } else {
              //to display error
                header("Location:updatepost.php?msg11=updateerror");
            }
        }
      }

    //Creating Delete function to delete post, they will only be deleted if the user is logged in
    public function deletePostRecord($post_id)
    {
      session_start();
        if(!isset($_SESSION['id'])){
          header('location:login.php');
          exit();
        }
        else{
        // adding query to delete our data
        $query = "DELETE FROM post_record WHERE post_id = '$post_id'";
        $sql = $this->databaseConnect->query($query);


        if ($sql == true) {
//to display message if the post is deleted successfully
            header("Location:posts.php?msg13=deletepost");
        } else {
          //to display error
          header("Location:posts.php?msg14=deleteerror");
        }
    }

}
}
?>
<!--   end of the code for our database -->
