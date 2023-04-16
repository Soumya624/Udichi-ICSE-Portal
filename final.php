<?php include 'inc/header.php'; ?>
<?php
Session::checkSession();
?>

<html>

<body>
    <div class="container">
        <div class="row" style="padding:5%">
            <div class="col-lg-12 text-center">
                <h3 class="mt-5">Congrats! You Have Just Completed the Test</h3>
                <p>Check Your Final Score. You Can Also Check the Correct Answers</p>
                <br />

                <div class="jumbotron">
                    <h3 class="text-danger">Final Score:
                        <?php
                        if (isset($_SESSION['score'])) {
                            echo $_SESSION['score'];
                            unset($_SESSION['score']);
                        }
                        ?>
                    </h3>
                </div>
                <br />
                <br />
                <a class="btn btn-outline-primary" href="viewans.php" style="border-radius:20px; width:15%"><span
                        class="fa fa-check-circle"></span>
                    View
                    Answer</a>
                <a class="btn btn-outline-primary" href="starttest.php" style="border-radius:20px; width:15%"><span
                        class="fa fa-arrow-right"></span>
                    Start
                    Test</a>
                <br />
                <br />
            </div>
        </div>
    </div>
</body>

</html>