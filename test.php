<?php include 'inc/header.php'; ?>
<?php
Session::checkSession();
if (isset($_GET['q'])) {
    $quesnumber = (int) $_GET['q'];
} else {
    header("Location:exam.php");
}
$total = $exam->getTotalRows();
$question = $exam->getQuestionNumber($quesnumber);

?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $process = $pro->getProcessData($_POST);
}
?>

<html>

<body>
    <div class="container">
        <div class="row" style="padding:5%">
            <div class="col-lg-12 text-center">
                <h3 class="mt-5">Question
                    <?php echo $question['quesNo'] . " of " . $total; ?>
                </h3>
                <br />
                <br />
            </div>
            <div class="col-lg-12">
                <form method="post" action="">
                    <table>
                        <tr>
                            <td colspan="2">
                                <p style="font-size:18px; font-weight:bold">
                                    <?php echo $question['quesNo'] . " . " . $question['ques']; ?>
                                </p>
                            </td>
                            <br />
                        </tr>
                        <?php
                        $answer = $exam->getAnswer($quesnumber);
                        if ($answer) {
                            while ($result = $answer->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="ans" class="form-check-input"
                                                    value="<?php echo $result['id']; ?>" /><?php echo $result['ans']; ?>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                            <?php }
                        } ?>
                    </table>
                    <br />
                    <br />
                    <br />
                    <center>
                        <input type="submit" name="submit" class="btn btn-outline-primary" value="Next Question"
                            style="border-radius:20px; width:15%" />
                        <input type="hidden" name="quesnumber" value="<?php echo $quesnumber; ?>" />
                    <center>
                </form>
                <br />
                <br />
            </div>
        </div>
    </div>
</body>

</html>