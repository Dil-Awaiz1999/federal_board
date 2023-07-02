<?php
    include '../../config/connect.php';
    $name = $_POST['name'];
    $father_name = $_POST['father_name'];
    if(isset($_FILES['image'])){
        $fileName = $_FILES['image']['name'];
        $fileSize = $_FILES['image']['size'];
        $tmp_name = $_FILES['image']['tmp_name'];
        move_uploaded_file($temp_name,'../assets/images/'.$fileName);
        #echo $fileName;
        #echo $fileSize;
    }
    $insert="INSERT INTO user (name,father_name,image) VALUES('{$name}','{$father_name}','{$fileName}')";
    mysqli_query($connection,$insert);
    header('location: http://localhost/FederalBoard/admin/view/home.php');
    #if($fileSize > 50){
       # session_start();
       # $_SESSION['error'] = 'Please choose an image of smaller size';
    #}else{

    #}
    #header('location: http://localhost/FederalBoard/admin/view/register_student.php');
?>