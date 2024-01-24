<?php
include("connection.php");
?>
<?php
$edit_id= $_GET['edit_data'];
$select="SELECT * FROM `ajax_project_image` WHERE `id`='$edit_id.'";
$result=mysqli_query($connection,$select);
$fetch=mysqli_fetch_assoc($result);
echo json_encode($fetch);
?>
