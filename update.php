<?php
include("connection.php");
?>
<?php
$update_id=$_POST['id'];
$update_name=$_POST['name'];
$update_email=$_POST['email'];
$update_city=$_POST['city'];
$update=" UPDATE `ajax_project_image` SET `name`='$update_name',`email`='$update_email',`city`='$update_city' WHERE `id`='$update_id'";
$query=mysqli_query($connection,$update);
if($query){
    echo 200;
}else{
    echo 300;
}




?>