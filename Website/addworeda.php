<?php



if (isset($_POST['submit'])) {
   $fname =$_POST['woredaname'];
   $phone =$_POST['phone'];
   $email = $_POST['email'];


   $sql = "INSERT INTO woreda SET
         woredaname='$fname',phone = '$phone',
         email='$email'";


    $conn = mysqli_connect('localhost', 'root', '')or die(mysqli_error());
    $db = mysqli_select_db($conn, 'ict') or die(mysqli_error());
    $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if ($res==true) {
      echo '<font color="green">Data Added successfully.</font>';
      //  include('add.html');
      // echo '<script language="javascript">alert("Woreda Added Successfully");</script>';

      header("Location:addworeda.html");
    }else {
        
    }
}



?>

