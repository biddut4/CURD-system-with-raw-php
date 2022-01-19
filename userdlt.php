<?php
    require_once 'db.php';

        $id = $_GET['id'];
        $query = "SELECT * FROM user WHERE id = $id";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result)) {
            $data = mysqli_fetch_assoc($result);
        }
        $path = "uploads/profile/" . $data['photo'];
        if (file_exists($path)) {
            unlink($path);
        }
        $query = "DELETE FROM user WHERE id = $id";
        $result = mysqli_query($con, $query);
        
        header("location: list.php");
?>