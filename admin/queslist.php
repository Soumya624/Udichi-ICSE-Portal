<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/inc/header.php');
include_once($filepath . '/../classes/Exam.php');
$exam = new Exam();
?>
<?php
if (isset($_GET['delque'])) {
    $quesNo = (int) $_GET['delque'];
    $delresult = $exam->getdelresult($quesNo);
}
?>

<html>

<body>
    <div class="container">
        <div class="row" style="padding:3%">
            <div class="col-lg-12 text-center">
                <?php
                if (isset($delresult)) {
                    echo $delresult;
                }
                ?>
                <h3 class="mt-5">Question List</h3>
                <br />
                <br />
            </div>
            <div class="col-lg-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="10%">NO</th>
                            <th width="70%">Question</th>
                            <th width="20%">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $questionData = $exam->getqueData();
                        if ($questionData) {
                            $i = 0;
                            while ($result = $questionData->fetch_assoc()) {
                                $i++;

                                ?>
                                <tr>
                                    <td>
                                        <?php echo $i; ?>
                                    </td>
                                    <td>
                                        <?php echo $result['ques']; ?>
                                    </td>
                                    <td><a onclick="return confirm('Are You Sure to Delete?')"
                                            href="?delque=<?php echo $result['quesNo']; ?>">Remove</a>
                                    </td>
                                </tr>
                            <?php }
                        } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>