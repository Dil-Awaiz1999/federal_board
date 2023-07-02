<?php
    include '../../config/connect.php';
    $id = $_GET['id'];
    $delete = "DELETE FROM user WHERE id = $id";
    mysqli_query($connection,$delete);
    session_start();
    $_SESSION['del_message'] = 'Data Deleted Successfully';
    header("Location: http://localhost/FederalBoard/admin/view/home.php")
?>