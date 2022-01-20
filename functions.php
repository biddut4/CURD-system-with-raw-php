<?php
    require_once 'db.php';

    $error = [];
    if(isset($_POST['submit'])){
        $name = trim(htmlentities($_POST['name']));
        $uname = trim(htmlentities($_POST['uname']));
        $email = trim(htmlentities($_POST["email"]));
        $pass = $_POST['password'];
        $cpass = $_POST['cpassword'];
        $photo = $_FILES['pic'];

        $enpass = md5($pass);
        $encpass = md5($cpass);

        if(empty($name)){
            $error ['nameerr'] = "please enter your name!";
        }
        if(empty($uname)){
            $error ['unameerr'] = "please enter your username!";
        }
        if(empty($email)){
            $error ['emailerr'] = "please enter your email!";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error ['emvailderr'] = "Invalid email format";
        }
        if(empty($pass)){
            $error ['passerr'] = "please enter your password!";
        }
        if(empty($cpass)){
            $error ['cpasserr'] = "please enter your confirm password!";
        }
        if(empty($photo['name'])){
            $error ['photoerr'] = "Upload your photo!";
        }
        if($pass !== $cpass){
            $error ['matcherr'] = "password are not matching";
        }

        // $photo_ex = explode('.',$photo['name']);
        // $photo_name = $name .'-'. time().'.'.end($photo_ex);
        // $p_ex = ['jpg','png'];

        // if(end($photo_ex) !== $p_ex){
        //     $error ['p_ex'] = "only jpg or png file support";
        // }

        $emailquery = "select * from user where email ='$email' ";
        $wquery = mysqli_query($con, $emailquery);
        $emailcount = mysqli_num_rows($wquery);

        if($emailcount>0){
            $email_alrady = "email already exits";
        }else{
            if(empty($error)){

                if($photo['name']){
                    $photo_ex = explode('.',$photo['name']);
                    $photo_name = $name .'-'. time().'.'.end($photo_ex);
    
                        move_uploaded_file($photo["tmp_name"], "uploads/profile/". $photo_name);
    
                        $query = "INSERT INTO user(name, uname, email, password, cpassword, photo) VALUES ('$name','$uname','$email','$enpass','$encpass','$photo_name')";
    
    
                        if(mysqli_query($con, $query)){
                        $smgs = "Registration successfull!";
                        }
                }
            }
        }
    }

?>