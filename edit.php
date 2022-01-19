<?php
    require_once 'db.php';
    $id = $_GET['id'];
    $query = "SELECT * FROM user WHERE id = $id";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result)){
        $data = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['submit'])){
        $name = trim(htmlentities($_POST['name']));
        $uname = trim(htmlentities($_POST['uname']));
        $email = trim(htmlentities($_POST['email']));
        $photo = $_FILES['pic'];
            if($photo['name']){
                $photo_ex = explode('.', $photo['name']);
                $photo_name = $name . '-' . time() . '.' . end($photo_ex);
                move_uploaded_file($photo["tmp_name"], "uploads/profile/" . $photo_name);
                $path = "uploads/profile/" . $data['photo'];
                if(file_exists($path)){
                    unlink($path);
                }
            }
            $query = "UPDATE user SET name='$name',uname='$uname',email='$email',photo='$photo_name' WHERE id = $id";

            // mysqli_query($con, $query);

            if (mysqli_query($con, $query)) {
                header("location: list.php");
            }
    }
    include 'header.php';
?>
<script>
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }
</script>
 <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mt-4">
                    <div class="card" style="background: #35363A;">
                        <div class="card_header" style="padding: 20px 0;">
                            <h1 style="text-align: center; color:#fff;">
                                USER EDIT
                            </h1>
                        </div>
                        <div class="card_body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="col-md-8 mb-4" style="margin:0 auto ;">
                                    <input type="text" name="name" class="form-control" value="<?= $data['name'];?>">
                                </div>
                                <div class="col-md-8 mb-4" style="margin:0 auto ;">
                                    <input type="text" name="uname" class="form-control" value="<?= $data['uname'];?>">
                                </div>
                                <div class="col-md-8 mb-4" style="margin:0 auto ;">
                                    <input type="email" name="email" class="form-control" value="<?= $data['email'];?>">
                                </div>
                                <div class="col-md-8 mb-4" style="margin:0 auto ;">
                                    <input type="file" name="pic" class="form-control" onchange="previewFile(this);">
                                </div>
                                <div class="col-md-8 mb-4" style="margin:0 auto ;">
                                    <img id="previewImg" width="80" src="uploads/profile/<?= $data['photo']?>" alt="">
                                </div>
                                <div class="col-md-8 mb-5" style="margin:0 auto ;">
                                    <input type="submit" name="submit" value="Update" class="form-control btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
    include 'footer.php';
?>