<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/inc/header.php');
include_once($filepath . '/../classes/Exam.php');
$exam = new Exam();
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $addQuestion = $exam->getAddQuestion($_POST);
}
// Get Total
$total = $exam->getTotalRows();
$next = $total + 1;
?>

<html>

<body>
    <div class="container">
        <div class="row" style="padding:3%">
            <div class="col-lg-12 text-center">
                <?php
                if (isset($addQuestion)) {
                    echo $addQuestion;
                } ?>
                <br />
                <br />
            </div>
            <div class="card" style="width:100%; padding: 1% 5%">
                <div class="card-body">
                    <div class="col-lg-12">
                        <form action="" method="post" name="tbl_ans">
                            <center>
                                <h4>Create Questions</h4>
                                <p>Please Fill the Following Details to Add Question
                                    <?php echo $next ?>
                                </p>
                            </center>
                            <br />
                            <br />
                            <table>
                                <tr>
                                    Question No.
                                    <input class="form-control" readonly type="number" name="quesNo" value="<?php
                                    if (isset($next)) {
                                        echo $next;
                                    }

                                    ?>">
                                </tr>
                                <br />
                                <tr>
                                    <input class="form-control" type="text" name="ques"
                                        placeholder="Enter Your Question" required style="height:100px">
                                </tr>
                                <br />
                                <br />
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input class="form-control" type="text" name="ans1"
                                            placeholder="Enter Option 1">
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="text" name="ans2"
                                            placeholder="Enter Option 2">
                                    </div>
                                </div>
                                <div class="row" style="margin-top:1%">
                                    <div class="col-sm-6">
                                        <input class="form-control" type="text" name="ans3"
                                            placeholder="Enter Option 3">
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="text" name="ans4"
                                            placeholder="Enter Option 4">
                                    </div>
                                </div>
                                <br />
                                <br />
                                <tr>
                                    Correct Option
                                    <input class="form-control" type="number" name="rightAns" min="1" max="4"
                                        required="1">
                                </tr>
                            </table>
                            <br />
                            <br />
                            <br />
                            <center>
                                <input type="submit" class="btn btn-outline-primary"
                                    style="border-radius:20px; width:20%" value="Submit">
                                <input class="btn btn-outline-primary" style="border-radius:20px; width:20%"
                                    value="Need Help">
                            </center>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>