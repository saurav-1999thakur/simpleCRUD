<?php
include('../../database/db_conn.php');
// print_r($_POST);
// print_r($_FILES);die;

$target_type = "GIF|jpg|JPEG|pdf";
$target_folder = ("../assets/images/test/");
$target_file = $target_folder.$_FILES['profile_pic']['name'];
move_uploaded_file($_FILES['profile_pic']['tmp_name'],$target_file);

$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$company = $_POST['company'];
$email = $_POST['email'];
$contact = $_POST['phone'];
$profile = $_FILES['profile_pic']['name'];

$query = "INSERT INTO `revise_1`(`first_name`,`last_name`,`company`,`email`,`contact`,`picture`)VALUES('".$firstName."','".$lastName."','".$company."','".$email."','".$contact."','".$profile."')";

if(mysqli_query($connect,$query)){
    header("location:listing.php");
}else{
    header("location:index.php");
}

?>