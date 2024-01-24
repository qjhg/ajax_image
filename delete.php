<?php
include("connection.php");
?>
<?php
$delete_id= $_GET['data'];
$delete="DELETE FROM `ajax_project_image` WHERE `id`='$delete_id'";
$query=mysqli_query($connection,$delete);
if($query){
    echo 200;
}else{
    echo 300;
}
?>