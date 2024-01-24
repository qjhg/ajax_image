<?php
include("connection.php");
?>
<?php
if(isset($_POST['name'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $image=$_FILES['image'];
    $image_name=$_FILES['image']['name'];
    $image_tmp_name=$_FILES['image']['tmp_name'];
    move_uploaded_file($image_tmp_name, "./images/". $image_name);
    $city=$_POST['city'];
$insert="INSERT INTO `ajax_project_image` (`name`,`email`,`password`,`image`,`city`) VALUES ('$name',' $email','$password','$image_name','$city')";
$query=mysqli_query($connection,$insert);
if($query){
    echo 200;
}else{
    echo 300;
}
}

?>