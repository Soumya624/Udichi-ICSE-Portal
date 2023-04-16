<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '../inc/header.php');
?>

<html>

<body>

    <div class="container">
        <div class="row" style="padding:3%">
            <div class="col-lg-12 text-center">
                <h3 class="mt-5">Welcome to Exam Control Panel</h3>
                <p>You Can Manage Your Users and Online Exam System to Add Questions</p>
                <br />
                <br />
                <div class="jumbotron">
                    <h4>Controls</h4>
                    <br />
                    <a class="btn btn-outline-success btn-lg" href="index.php" style="font-size:14px"><span
                            class="fa fa-home"></span> Home</a>
                    <a class="btn btn-outline-info btn-lg" href="users.php" style="font-size:14px"><span
                            class="fa fa-user-circle"></span>
                        Manage
                        Users</a>
                    <a class="btn btn-outline-primary btn-lg" href="quesadd.php" style="font-size:14px"><span
                            class="fa fa-question-circle"></span>
                        Add Question</a>
                    <a class="btn btn-outline-dark btn-lg" href="queslist.php" style="font-size:14px"><span
                            class="fa fa-list"></span> Ques
                        List</a>
                    <a class="btn btn-outline-danger btn-lg" href="?action=logout" style="font-size:14px"><span
                            class="fa fa-sign-out"></span>
                        Logout</a>
                </div>

            </div>
        </div>
    </div>
</body>

</html>