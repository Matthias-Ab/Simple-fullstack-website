<?php



if (isset($_POST['submit'])) {
   $fname =$_POST['firstname'];
   $mname =$_POST['middlename'];
   $lname =$_POST['lastname'];
   $username =$_POST['username'];
   $email = $_POST['email'];
   $password =md5($_POST['password']);
   $sex =$_POST['sex']; 
   $age = $_POST['age'];
   $tablename = $_POST['job'];


   $sql = "INSERT INTO $tablename SET
         fname='$fname',mname = '$mname',lname='$lname',
         username='$username',email='$email',password='$password',
         sex='$sex',age='$age'";


    $conn = mysqli_connect('localhost', 'root', '')or die(mysqli_error());
    $db = mysqli_select_db($conn, 'ict') or die(mysqli_error());
    $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if ($res==true) {
      echo '<font color="green">Data Added successfully.</font>';
      //  include('add.html');

      header("Location:add.html");
    }else {
        
    }
}



?>

