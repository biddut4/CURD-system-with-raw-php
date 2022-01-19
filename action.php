<?php
    require_once 'db.php';
    $id = $_GET['id'];

    $query = "SELECT status FROM user WHERE id = '$id'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result)> 0){
        $data = mysqli_fetch_assoc($result);
    }

    if($data['status']==1){
        $query = "UPDATE user SET status='2' WHERE id = '$id'";
        mysqli_query($con, $query);
        header('location: list.php');
    }else{
        $query = "UPDATE user SET status='1' WHERE id = '$id'";
        mysqli_query($con, $query);
        header('location: list.php');
    }
?>