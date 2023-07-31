<?php 
include('../database/db_conn.php');
$id = $_POST['edit_id'];

$target_folder = ("../assets/images/test/");
$target_file = $target_folder.$_FILES['profile_pic']['name'];
move_uploaded_file($_FILES['profile_pic']['tmp_name'],$target_file);

$query = "SELECT `picture` FROM `revise_1` WHERE id = '".$id."' ";
$select = mysqli_query($connect,$query);
$result = mysqli_fetch_row($select);

$old_img = $target_folder.$result[0];
unlink($old_img);

$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$company = $_POST['company'];
$email = $_POST['email'];
$contact = $_POST['phone'];
$profile = $_FILES['profile_pic']['name'];
$query = "UPDATE `revise_1` SET `first_name` = '".$firstName."', `last_name` = '".$lastName."',`company` = '".$company."', `email` = '".$email."', `contact` = '".$contact."', `picture` = '".$profile."' WHERE id = '".$id."' ";
if(mysqli_query($connect,$query)){
    header("location:listing.php");
}else{
    echo "something went wrong";
}

?>