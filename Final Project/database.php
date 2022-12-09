<!-- NAME: AARSH PARIMAL PATEL -->
<!-- STUDENT ID: 200520260 -->
<!-- Main Project-->

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
        $fullname = $this->databaseConnect->real_escape_string($_POST['fullname']);
        $email = $this->databaseConnect->real_escape_string($_POST['email']);
        $phonenum = $this->databaseConnect->real_escape_string($_POST['phonenum']);
        $username = $this->databaseConnect->real_escape_string($_POST['username']);
        $pass_word = hash('sha256',$_POST['pass_word']);
        // adding query to add our data

        $query = "INSERT INTO admin_record(fullname,email,phonenum, username, pass_word) VALUES ('$fullname','$email','$phonenum', '$username', '$pass_word')";

        $sql = $this->databaseConnect->query($query);
        if ($sql == true) {
        header("Location:saveadmin.php?msg1=insert");
      }
      else{
        header("Location:signup.php?msg5=error1");

        }
    }

public function loginCheck()
{
  $username = $this->databaseConnect->real_escape_string($_POST['username']);
  $pass_word = hash('sha256',$_POST['pass_word']);
  $query = "SELECT * FROM admin_record WHERE username = '$username' AND pass_word = '$pass_word'";
    $results = $this->databaseConnect->query($query);
    $records = mysqli_num_rows($results);
    if($records > 0) {
      header("Location:view.php?msg4=login");
    }
    else{
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
            // adding alert fo error
?>
            <div class="signuppage">
                <?php echo "<h2> No Users found :( </h2>"; ?>
            </div>
<?php
        }
    }


    //creating function to fetch single row from the table (Read and Update function)
    public function displayRecordById($id)
    {
        // adding query to display our data
        $query = "SELECT * FROM admin_record WHERE id = '$id'";
        $results = $this->databaseConnect->query($query);
        if ($results->num_rows > 0) {
            $row = $results->fetch_assoc();
            return $row;
        } else {
            header("Location:update.php?msg7=error3");
        }
    }
    //Creating update function
    public function updateRecord($postData)
    {
        $fullname = $this->databaseConnect->real_escape_string($_POST['ufullname']);
        $email = $this->databaseConnect->real_escape_string($_POST['uemail']);
        $phonenum = $this->databaseConnect->real_escape_string($_POST['uphonenum']);
        $username = $this->databaseConnect->real_escape_string($_POST['username']);
        $pass_word = hash('sha256',$_POST['pass_word']);
        $id = $this->databaseConnect->real_escape_string($_POST['id']);

        if (!empty($id) && !empty($postData)) {
            // adding query to update our data
            $query = "UPDATE admin_record SET fullname = '$fullname', email = '$email', phonenum = '$phonenum', username = '$username', pass_word = '$pass_word'  WHERE id = '$id'";
            $sql = $this->databaseConnect->query($query);
            if ($sql == true) {
                //this will display message on the View profile page when the form is submitted successfully
                header("Location:view.php?msg2=update");
            } else {
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
            //this will display message on the View profile page when the form is submitted successfully
            header("Location:view.php?msg3=delete");
        } else {
          header("Location:view.php?msg8=error4");
        }
    }
}


//  end of the code for our database
?>
