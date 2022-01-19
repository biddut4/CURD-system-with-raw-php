<?php

    require_once 'db.php';
    $id = $_GET['id'];
    $query = "SELECT * FROM user WHERE id = $id";
    $result = mysqli_query($con, $query);
    
    if(mysqli_num_rows($result)){
        $data = mysqli_fetch_assoc($result);
    }

    include 'header.php';
?>

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mt-4">
                    <div class="card" style="background: #35363A;">
                        <div class="card-header mb-4" >
                            <h2 style="text-align: center; color:#fff; ">User Information</h2>
                        </div>
                        <div class="card-body justify-content-center";>
                            <div class="col-md-3" style="float: left; text-align: center;">
                                <img width="100" src="uploads/profile/<?= $data['photo']?>" alt="profile" style="border-radius: 50%; margin-top:40px;">
                            </div>
                            <div class="col-md-9" style="float: right;">
                                <h4 style="text-align: center; color:#fff; margin-bottom:20px; text-transform: capitalize;"><?= $data['name']?></h4>
                                <ul style=color:#fff; ">
                                    <li>ID: <?= $data['id']?></li>
                                    <li>User Name: <?= $data['uname']?></li>
                                    <li>Email: <?= $data['email']?></li>
                                </ul>
                            </div>
                        </div>

                        <div class="card-footer mt-4">
                            <a href="list.php" class="btn btn-outline-primary" style="float: left;">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
    include 'footer.php';
?>

