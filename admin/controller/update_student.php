<?php
    include '../../config/connect.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
    $father_name = $_POST['father_name'];
    if(isset($_FILES['image'])){
        $fileName = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        move_uploaded_file($temp_name,'../assets/images/'.$fileName);
    }
    $update = "UPDATE `user` SET `name`='{$name}',`father_name`='{$father_name}',`image`='{$fileName}' WHERE id = $id";
    mysqli_query($connection,$update);
    header('location: http://localhost/FederalBoard/admin/view/home.php');
   
?>