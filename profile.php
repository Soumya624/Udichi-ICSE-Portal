<?php include 'inc/header.php'; ?>
<?php
Session::checkSession();
$userId = Session::get("userId");
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userProfile = $user->getUserPData($userId, $_POST);
}
?>

<html>

<body>
    <div class="container">
        <div class="row" style="padding:7%">
            <div class="col-lg-12">
                <div class="card" style="width:100%; padding: 0 5%">
                    <center>
                        <h5 class="mt-5">Update Your Profile</h5>
                        <?php
                        if (isset($userProfile)) {
                            echo $userProfile;
                        }
                        ?>
                    </center>
                    <br />
                    <div class="card-body">
                        <form action="" method="post">
                            <?php
                            $getData = $user->getUserProfile($userId);
                            if ($getData) {
                                while ($result = $getData->fetch_assoc()) {
                                    ?>
                                    <table>
                                        <tr>
                                            Name
                                            <input type="text" class="form-control" name="name"
                                                value="<?php echo $result['name']; ?>" id="name">
                                        </tr>
                                        <div class="row" style="margin-top:1%">
                                            <div class="col-sm-6">
                                                Username
                                                <input type="text" class="form-control" name="userName"
                                                    value="<?php echo $result['userName']; ?>" id="userName">
                                            </div>
                                            <div class="col-sm-6">
                                                Email
                                                <input name="email" class="form-control" type="email"
                                                    value="<?php echo $result['email']; ?>" id="email">
                                            </div>
                                        </div>
                                        <br />
                                        <br />
                                        <br />
                                        <center>
                                            <input type="submit" id="profileUpdate" class="btn btn-outline-primary"
                                                style="border-radius:20px; width:20%" value="Update">
                                            <center>
                                    </table>
                                <?php }
                            } ?>
                        </form>
                        <br />
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>