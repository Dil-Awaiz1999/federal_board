<?php
    include '../../config/connect.php';
    $name = mysqli_real_escape_string($connection,$_POST['name']);
    $username = mysqli_real_escape_string($connection,$_POST['username']);
    $password = mysqli_real_escape_string($connection,md5($_POST['password']));
    $insert = "INSERT INTO `authenticate`(`name`, `username`, `password`) VALUES ('{$name}','{$username}','{$password}')";
    $result = mysqli_query($connection,$insert);
        session_start();
        $_SESSION['username'] = $username;
        header('location: http://localhost/FederalBoard/admin/view/home.php'); 
?>