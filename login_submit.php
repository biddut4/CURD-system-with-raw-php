<?php
session_start();

if(isset($_POST['login'])){
    $email = trim(htmlentities($_POST['email']));
    $password = $_POST['password'];
    $ecpass = md5($password);

    require_once 'db.php';
    $query = "SELECT id, name, email, password, photo, status FROM user WHERE email = '$email' AND password = '$ecpass' AND status='1'";
    $result = mysqli_query($con, $query);


    if(mysqli_num_rows($result)>0){
        $datas = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $datas['id'];
        $_SESSION['name'] = $datas['name'];
        $_SESSION['email'] = $datas['email'];

        $_SESSION['cookie'] = setcookie('logincookie', 'login', time()+30, '/' );

        header("location:list.php");
    }else{
        header("location: login.php");
    }
}
?>