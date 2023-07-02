<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../assets/boot_css.php'?>
    <title>home</title>
    
</head>
<body>
    <?php 
    session_start();
    
    include "../components/nav.php";
    if(isset($_SESSION['del_message'])){
        echo "<div class='animate bg-danger text-center text-light p-3 font-weight-bolder'>". $_SESSION['del_message'] . "</div>";
    }
    
    ?>
    <table class="table text-center text-capitalize">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>father name</th>
                <th>images</th>
                <th>update</th>
                <th>delete</th>
            </tr>
        </thead>
        <tbody>
        <?php include "../../config/connect.php";
        $select = "SELECT * FROM `user`";
        $result = mysqli_query($connection,$select);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){            
    ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['father_name']?></td>
        <td>
            <img width="50px" src="../../assets/images/Penguin.jpg<?php echo $row['image']?>" alt="">
        </td>
        <td><a href="./updated_record.php?id=<?php echo $row['id']?>" class="btn btn-info">Update</a></td>
        <td><a href="../controller/delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a></td>

    </tr>
    <?php }}?>
    </tbody>
    </table>  
    <script>
    let myDiv = document.querySelector('.animate');
    setTimeout(()=>{
        myDiv.style.opecity = '0'
        myDiv.style.transition = 'all 0.9s'
        //myDiv.style.height = '0'
    },2000)
        
    </script>
    <?php
            unset($_SESSION['del_message'])
        ?>
</body>
</html>
