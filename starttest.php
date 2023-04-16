<?php include 'inc/header.php'; ?>
<?php
Session::checkSession();
$question = $exam->getQuestion();
$total = $exam->getTotalRows();
?>

<html>

<body>
    <div class="container">
        <div class="row" style="padding:7%">
            <div class="col-lg-12">
                <div class="card" style="width:100%; padding: 5%">
                    <div class="card-body">
                        <center>
                            <h4>Start Exam</h4>
                            <p>Number Of Question:
                                <?php echo $total; ?>
                            </p>
                        </center>
                        <br />
                        <ul>
                            <li>The examination does not require any paper, pen, pencil and calculator</li>
                            <li>Any student can take the examination on a Laptop/Desktop/Smart Phone</li>
                            <li>The answers can be changed at any time during the test and are saved automatically</li>
                            <li>The system automatically shuts down when the time limit is over. Alternatively if
                                examinee finishes the
                                exam before time he can quit by pressing the 'Submit' button</li>
                        </ul>
                        <br />
                        <center>
                            <a href="test.php?q=<?php echo $question['quesNo']; ?>" class="btn btn-outline-primary"
                                style="border-radius:20px; width:15%">
                                <span class="fa fa-arrow-right"></span> Start Exam
                            </a>
                        </center>
                    </div>
                </div>
                <br />
                <br />
            </div>
        </div>
    </div>
</body>

</html>