
<?php
$conn = mysqli_connect('localhost', 'root', '')or die(mysqli_error());
$db = mysqli_select_db($conn, 'ict') or die(mysqli_error($conn));
// ini_set('display_errors','Off');
// ini_set('error_reporting', E_ALL );
// define('WP_DEBUG', false);
// define('WP_DEBUG_DISPLAY', false);

if (isset($_POST['submit'])) {
     $user = $_POST['username'];
     $pass = md5($_POST['password']);
     $job = $_POST['job'];
     $sql = "SELECT * FROM $job WHERE username='$user' AND  password='$pass'";

     $res = mysqli_query($conn, $sql);

     $count = mysqli_num_rows($res);
    if ($count==1) {
        $row = mysqli_fetch_assoc($res);
        if ($job == "teamleader") {
            // include ("admin.html");
            header("Location:admin.php");

        }elseif ($job == "systemadminstrator") {

            // include ("saupdate.html");
            header("Location:saupdate.html");

        }elseif ($job == "networkadminstrator") {

            // include ("naupdate.html");
            header("Location:naupdate.html");

        }elseif ($job == "communicationandinformation") {

            // include ("ciupdate.html");
            header("Location:ciupdate.html");
        }else {
            // include("admin.html");
            header("Location:admin.html");
        }
            
       
    }else{
        header("Location: signinhtml.php?error=Incorrect Username or Password");
        exit();
    }
}


?>



