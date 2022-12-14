<?php
$conn = mysqli_connect('localhost', 'root', '')or die(mysqli_error());
$db = mysqli_select_db($conn, 'ict') or die(mysqli_error());


if ($_SERVER["REQUEST_METHOD"]=="POST") {

    if (empty($_POST["id"])) {
        header("Location: ciupdate.html");
    }else{
        $id =$_POST['id'];
        $fname =$_POST['firstname'];
        $mname =$_POST['middlename'];
        $lname =$_POST['lastname'];
        $username =$_POST['username'];
        $email = $_POST['email'];
        $password =$_POST['password'];
        $sex =$_POST['sex']; 
        $age = $_POST['age'];
        


     $sql = "UPDATE communicationandinformation SET
         fname='$fname',mname = '$mname',lname='$lname',
         username='$username',email='$email',password='$password',
         sex='$sex',age='$age' WHERE id=$id";

      if ($old == 'password') {
        if ($conn->query($sql)) {
            echo '<font color="green">Data updated successfully.</font>';
            // include("saupdate.html");
            header("ciupdate.html");
        }else{
         // include("saupdate.html");
         header("ciupdate.html");
        }
      }else {
          header("Location: ciupdate.html?error=incorrect password");
      }
       
    }
}
?>