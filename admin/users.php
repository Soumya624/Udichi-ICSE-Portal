<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/inc/header.php');
include_once($filepath . '/../classes/User.php');
$user = new User();
?>
<?php
if (isset($_GET['dis'])) {
    $disid = (int) $_GET['dis'];
    $disuser = $user->disableUser($disid);
}

if (isset($_GET['ena'])) {
    $enaid = (int) $_GET['ena'];
    $enauser = $user->enaUser($enaid);
}
if (isset($_GET['del'])) {
    $delid = (int) $_GET['del'];
    $deluser = $user->delUser($delid);
}
?>

<html>

<body>
    <div class="container">
        <div class="row" style="padding:3%">
            <div class="col-lg-12 text-center">
                <h3 class="mt-5">Manage Users</h3>
                <br />
                <br />
            </div>
            <div class="col-lg-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAME</th>
                        <th>USERNAME</th>
                        <th>EMAIL</th>
                        <th>ACTION</th>
                    </tr>
                    </thead>
                <tbody>
                    <?php
                    $userData = $user->getUserData();
                    if ($userData) {
                        $i = 0;
                        while ($result = $userData->fetch_assoc()) {
                            $i++;

                            ?>
                            <tr>
                                <td><?php
                                if ($result['status'] == '1') {
                                    echo "<span class='error'>" . $i . "</span>";
                                } else {
                                    echo $i;
                                }


                                ?></td>
                                <td><?php echo $result['name']; ?></td>
                                <td><?php echo $result['userName']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td>
                                    <a class=" btn btn-outline-danger"
                            onclick="return confirm('Are You Sure to Delete?')" href="?del=<?php echo $result['userId']; ?>">
                            Remove</a>
                            </td>
                            </tr>
                        <?php }
                    } ?>
                    <tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>