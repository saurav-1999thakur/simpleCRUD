<?php 
include('../../database/db_conn.php');
$id = $_GET['del_id'];

$query = "SELECT `picture` from `revise_1` where id = '".$id."'";
$select = mysqli_query($connect,$query);
$result = mysqli_fetch_assoc($select);
$target_folder=("../assets/images/test/");
$old_image=$target_folder.$result[0];
unlink($old_image);

$query = "DELETE FROM `revise_1` where id = '".$id."' ";
if(mysqli_query($connect,$query)){
    header("location:listing.php");
}else{
    echo "somthine went wrong";
}



?>