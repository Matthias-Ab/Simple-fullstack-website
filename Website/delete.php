<?php

$id = $_POST['id'];
$tablename = $_POST['job'];

$sql = "DELETE FROM $tablename WHERE id= $id";
// echo var_dump($id);
    $conn = mysqli_connect('localhost', 'root', '')or die(mysqli_error());
    $db = mysqli_select_db($conn, 'ict') or die(mysqli_error());
    $res = mysqli_query($conn, $sql);

if($res == true)
{
    echo '<font color="green">Data Deleted successfully.</font>';
    // include("delete.html");
    // echo '<script language="javascript">alert("Deleted Successfully");</script>';
    header("Location:delete.html");
}else {
    echo "Failed to delete";
}


?>

