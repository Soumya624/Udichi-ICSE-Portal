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
    <style>
        select {
            border: none;
            color: red;
        }

        a {
            display: none;
        }

        .goog-te-gadget {
            font-size: 0;
        }
    </style>
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
                                <p style="font-size:18px; font-weight:bold; display:flex">
                                    <?php echo $question['quesNo'] . " . " . $question['ques']; ?>
                                    <input onclick="responsiveVoice.speak('<?php echo $question['ques']; ?>');"
                                        type='button' value='🔊' style="border:none; background-color:white" />
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
                            style="border-radius:20px; width:40%" />
                        <input type="hidden" name="quesnumber" value="<?php echo $quesnumber; ?>" />
                        <div id="google_translate_element" style="margin-top:7px"></div>
                        <script type="text/javascript">
                            function googleTranslateElementInit() {
                                new google.translate.TranslateElement({ pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL }, 'google_translate_element');
                            }
                        </script>
                        <script type="text/javascript"
                            src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                        <script src='https://code.responsivevoice.org/responsivevoice.js'></script>
                        <center>
                </form>
                <br />
                <br />
            </div>
        </div>
    </div>
    <div class="booth">
        <video id="video" width="18%" height="18%" autoplay style="position:absolute; right:0; bottom:0">
        </video>
    </div>
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