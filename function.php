<?php
extract($_POST);
include("config.php");

$sql = mysqli_query($con, "SELECT * FROM usertable where Email='$email'");
if (mysqli_num_rows($sql) > 0) {
    echo "Email Id Already Exists";
    exit;
} else if (isset($_POST['save'])) {


    $query = "INSERT INTO usertable (email, password) VALUES ('$email', 'md5($pass)')";
    $sql = mysqli_query($con, $query) or die("Could Not Perform the Query");
    header("Location: login.php?status=success");
} else {
    echo "Error.Please try again";
}


?>

