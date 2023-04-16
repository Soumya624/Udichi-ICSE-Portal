<?php include 'inc/header.php'; ?>
<?php
Session::checkSession();
$total = $exam->getTotalRows();
?>

<html>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="mt-5">Answer of
                    <?php echo $total; ?> Questions
                </h3>
                <br />
                <br />
            </div>

            <div class="col-lg-12">
                <table>
                    <?php
                    $getQues = $exam->getqueData();
                    if ($getQues) {
                        while ($question = $getQues->fetch_assoc()) {
                            ?>
                            <tr>
                                <td colspan="2">
                                    <p style="font-size:18px; font-weight:bold; margin:5% 0">
                                        <?php echo $question['quesNo'] . " . " . $question['ques']; ?>
                                    </p>
                                </td>
                            </tr>
                            <?php
                            $quesnumber = $question['quesNo'];
                            $answer = $exam->getAnswer($quesnumber);
                            if ($answer) {
                                while ($result = $answer->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td>
                                            <input type="radio" />
                                            <?php
                                            if ($result['rightAns'] == '1') {
                                                echo "<span style='color:green;font-weight: bold;'>" . $result['ans'] . "</span>";
                                            } else {
                                                echo $result['ans'];
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                <?php }
                            } ?>
                        <?php }
                    } ?>
                </table>
                <br />
                <br />
                <br />
                <center>
                    <a href="exam.php" class="btn btn-outline-primary" style="border-radius:20px; width:15%">
                        Go Back
                    </a>
                    <a href="starttest.php" class="btn btn-outline-primary" style="border-radius:20px; width:15%">
                        Need Help
                    </a>
                </center>
                <br />
                <br />
            </div>
        </div>
    </div>
    </div>
</body>

</html>