    <?php
    include 'header.php';
    include 'functions.php'
    ?>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mt-4">
                    <div class="card" style="background: #35363A;">
                    <?php
                            if (isset($smgs)) {
                                echo '<div class="card_mgs" style="padding: 10px 0; background:#3C4043;">
                                    <p style="text-align: center; color:#fff; text-transform:capitalize;">' . $smgs .'</p>
                                    </div>';
                            }
                        ?>
                        

                        <div class="card_header" style="padding: 20px 0;">
                            <h1 style="text-align: center; color:#fff;">
                                REGISTER FORM
                            </h1>
                        </div>
                        <div class="card_body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="col-md-8 mb-4 error" style="margin:0 auto ;">
                                    <input type="text" name="name" class="form-control" placeholder="Enter your full name">
                                    <?php
                                    if (isset($error['nameerr'])) {
                                        echo "<p>" . $error['nameerr'] . "</p>";
                                    }
                                    ?>
                                </div>
                                <div class="col-md-8 mb-4" style="margin:0 auto ;">
                                    <input type="text" name="uname" class="form-control" placeholder="Enter your username">
                                    <?php
                                    if (isset($error['unameerr'])) {
                                        echo "<p>" . $error['unameerr'] . "</p>";
                                    }
                                    ?>
                                </div>
                                <div class="col-md-8 mb-4" style="margin:0 auto ;">
                                    <input type="email" name="email" class="form-control" placeholder="Enter your Email address">
                                    <?php
                                    if (isset($error['emailerr'])) {
                                        echo "<p>" . $error['emailerr'] . "</p>";
                                    }
                                    ?>
                                    <?php
                                    if (isset($error['emvailderr'])) {
                                        echo "<p>" . $error['emvailderr'] . "</p>";
                                    }
                                    ?>
                                    <?php
                                    if (isset($email_alrady)) {
                                        echo "<p>" . $email_alrady . "</p>";
                                    }
                                    ?>
                                </div>
                                <div class="col-md-8 mb-4" style="margin:0 auto ;">
                                    <input type="password" name="password" class="form-control" placeholder="Enter a password">
                                    <?php
                                    if (isset($error['passerr'])) {
                                        echo "<p>" . $error['passerr'] . "</p>";
                                    }
                                    ?>
                                </div>
                                <div class="col-md-8 mb-4" style="margin:0 auto ;">
                                    <input type="password" name="cpassword" class="form-control" placeholder="Enter your confirm password">
                                    <?php
                                    if (isset($error['cpasserr'])) {
                                        echo "<p>" . $error['cpasserr'] . "</p>";
                                    }
                                    ?>
                                    <?php
                                    if (isset($error['matcherr'])) {
                                        echo "<p>" . $error['matcherr'] . "</p>";
                                    }
                                    ?>
                                </div>
                                <div class="col-md-8 mb-4" style="margin:0 auto ;">
                                    <input type="file" name="pic" class="form-control">
                                    <?php
                                    if (isset($error['photoerr'])) {
                                        echo "<p>" . $error['photoerr'] . "</p>";
                                    }
                                    if (isset($error ['p_ex'])) {
                                        echo "<p>" . $error ['p_ex'] . "</p>";
                                    }
                                    ?>
                                </div>
                                <div class="col-md-8 mb-5" style="margin:0 auto ;">
                                    <input type="submit" name="submit" value="Register" class="form-control btn btn-primary">
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