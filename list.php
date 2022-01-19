<?php
include 'header.php';
if(!isset($_SESSION['id'])){
    header('location:login.php');
}
?>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md mt-4">
                <div class="card" style="background: #35363A;">
                    <div class="card-body" id="no-more-tables">
                        <table class="table table-dark table-hover table-bordered">
                            <thead>
                                <tr style="text-align: center;">
                                    <th scope="col">No</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                    require_once 'db.php';
                                    $equery = "SELECT id, name, uname, email, photo, status FROM user";
                                    $result = mysqli_query($con, $equery);

                                    if (mysqli_num_rows($result) > 0) {
                                        $datas = mysqli_fetch_all($result, true);
                                    }
                                    foreach ($datas as $key=> $data) {
                                ?>
                                    <tr style="text-align: center;">
                                        <td data-title="No"><?= ++$key?></td>
                                        <td data-title="Photo"><img width="80" src="uploads/profile/<?= $data['photo']?>" alt=""></td>
                                        <td data-title="Name"><?= $data['name']?></td>
                                        <td data-title="User Name"><?= $data['uname']?></td>
                                        <td data-title="Email"><?= $data['email']?></td>
                                        <td data-title="Action">
                                            <a href="user.php?id=<?= $data['id']; ?>" class="btn btn-outline-primary">View</a>
                                            <a href="userdlt.php?id=<?= $data['id']; ?>" class="btn btn-outline-primary">Delete</a>
                                            <a href="edit.php?id=<?= $data['id'];?>" class="btn btn-outline-secondary">Edit</a>
                                            <a href="action.php?id=<?= $data['id']; ?>" class="btn btn-outline-primary"><?= $data['status']==1 ? "Deactive" : "Active"?></a>
                                        </td>
                                        <td data-title="Status"><?= $data['status']==1 ? "Active" : "Deactive"?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<div class="alert_box">
    <div class="card custom_card">
        <div class="card-header"><h6>Confirm Messege</h6></div>
        <div class="card-body">
            <p>Are you sure Delete this user</p>
        </div>
        <div class="card-footer">
            <button  class="btn btn-outline-primary a_close" style="float: left;">No</button>
            <a class="btn btn-outline-primary" style="float: right;">Yes</a>
        </div>
    </div>
</div>




<?php
include 'footer.php';
?>