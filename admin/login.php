<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/inc/loginheader.php');
include_once($filepath . '/../classes/Admin.php');
$ad = new Admin();
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $adminData = $ad->getAdminData($_POST);
}
?>

<html>

<body>
    <div class="container" style="padding:5% 3%">
        <div class="row">
            <div class="col-lg-12 text-center">
            </div>
            <div class="row" style="align-items: center;">
                <div class="col-sm-6">
                    <div class="card" style="width:100%; padding: 5%">
                        <div class="card-body">
                            <center>
                                <h4>Login Admin</h4>
                                <p style="padding:1% 10%">Please Enter the Following Details to Get Into Your Account
                                </p>
                            </center>
                            <br />
                            <div class="col-sm-12">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email Address</label>
                                        <input type="text" class="form-control" name="adminUser"
                                            placeholder="Enter Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="adminPass" class="form-control"
                                            placeholder="Enter Password">
                                    </div>
                                    <br/>
                                    <button type="submit" name="login" value="Login" class="btn btn-outline-primary"
                                        style="border-radius:20px; width:100%">Continue</button>
                                </form>
                                <br />

                                <?php
                                if (isset($adminData)) {
                                    echo $adminData;
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6"><img src="./../img/p4.png" /></div>
            </div>
        </div>
    </div>
</body>

</html>