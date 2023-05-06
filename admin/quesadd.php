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
                                        placeholder="Enter Your Question" style="height:100px">
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
                                    <input class="form-control" type="number" name="rightAns" min="1" max="4">
                                </tr>
                            </table>
                            <br />
                            <br />
                            <br />
                            <center>
                                <input type="submit" class="btn btn-outline-primary"
                                    style="border-radius:20px; width:20%" value="Submit">
                                <button class="btn btn-outline-primary" style="border-radius:20px; width:20%"
                                    onclick="importexcel()">Use Google Sheet</button>
                            </center>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function importexcel() {
        let SHEET_ID = "1rGqFdOYUrO6CbXbLTFNGlmAyAUueFrXWXoblBIGgnAg";
        let SHEET_TITLE = "QnA";
        let SHEET_RANGE = "A1:F9";

        let FULL_URL =
            "https://docs.google.com/spreadsheets/d/" +
            SHEET_ID +
            "/gviz/tq?sheet=" +
            SHEET_TITLE +
            "&range=" +
            SHEET_RANGE;

        fetch(FULL_URL)
            .then((res) => res.text())
            .then((rep) => {
                let data = JSON.parse(rep.substr(47).slice(0, -2));
                console.log(data.table.rows);

                var count = 1;

                for (var i = 0; i < data.table.rows.length; i++) {
                    var ques = data.table.rows[i].c[0].v;
                    var c1 = data.table.rows[i].c[1].v;
                    var c2 = data.table.rows[i].c[2].v;
                    var c3 = data.table.rows[i].c[3].v;
                    var c4 = data.table.rows[i].c[4].v;
                    var correct = data.table.rows[i].c[5].v;

                    // console.log(ques);

                    // Send AJAX request to server-side PHP script to insert data into database
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "insertquestion.php", true);
                    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState == 4 && xhr.status == 200) {
                            //console.log(xhr.responseText);
                        }
                    };
                    xhr.send("quesNo=" + count + "&ques=" + ques + "&ans1=" + c1 + "&ans2=" + c2 + "&ans3=" + c3 + "&ans4=" + c4 + "&rightAns=" + correct);

                    count++;
                }
            })
        alert('Imported Successfully!');
    }
</script>

</html>