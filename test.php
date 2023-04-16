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

<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    </script>
</head>

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
    <!-- <div class="card">
        <h5 class="card-header h5 text-center">
            HTML 5 & JS live Cam
        </h5>
        <div class="card-body">
            <div class="booth">
                <video id="video" width="100%" height="100%" autoplay>
                </video>
            </div>

            <div class="text-right">
                <a href="#!" class="btn btn-danger" onClick="stop()">
                    Stop Cam
                </a>
                <a href="#!" class="btn btn-success" onClick="start()">
                    Start Cam
                </a>
            </div>
        </div>
    </div> -->
    <script>
        var stop = function () {
            var stream = video.srcObject;
            var tracks = stream.getTracks();
            for (var i = 0; i < tracks.length; i++) {
                var track = tracks[i];
                track.stop();
            }
            video.srcObject = null;
        }
        var start = function () {
            var video = document.getElementById('video'),
                vendorUrl = window.URL || window.webkitURL;
            if (navigator.mediaDevices.getUserMedia) {
                navigator.mediaDevices.getUserMedia({ video: true })
                    .then(function (stream) {
                        video.srcObject = stream;
                    }).catch(function (error) {
                        console.log("Something Went Wrong!");
                    });
            }
        }
        $(function () {
            start();
        });  
    </script>
</body>

</html>