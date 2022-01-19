<?php
include "header.php";
?>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6" style="height: 100vh;display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;-webkit-box-align: center;-ms-flex-align: center;align-items: center;">
                <div class="card" style="min-width: 100%;">
                    <div class="header_img mt-3" style="display: flex; justify-content:center;">
                        <img width="80" src="img/login.png" alt="login">
                    </div>
                    <div class="card-body">
                        <form action="login_submit.php" class="form-control" method="POST">
                            <div class="col-md-10 mb-3 mt-3" style="margin:0 auto ;">
                                <input type="Email" placeholder="Enter your Email address" name="email" class="form-control">
                            </div>
                            <div class="col-md-10 mb-3" style="margin:0 auto ;">
                                <input type="password" placeholder="Enter your password" name="password" class="form-control">
                            </div>
                            <div class="col-md-10 mb-3" style="margin:0 auto ;">
                                <input type="submit" value="Login" name="login" class="form-control btn btn-primary">
                            </div>
                            <div class="col-md-10 mb-3" style="margin:0 auto ;">
                                <p>If you have no account please <a href="regis.php" style="color:blue;">Registration</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include "footer.php";
?>