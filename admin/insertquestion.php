<?php
include_once('../classes/Exam.php');

$exam = new Exam();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = array();
    $data['quesNo'] = $_POST['quesNo'];
    $data['ques'] = $_POST['ques'];
    $data['ans1'] = $_POST['ans1'];
    $data['ans2'] = $_POST['ans2'];
    $data['ans3'] = $_POST['ans3'];
    $data['ans4'] = $_POST['ans4'];
    $data['rightAns'] = $_POST['rightAns'];

    // Insert question and answers into database
    $result = $exam->getAddQuestion($data);

    // Print success or error message
    echo $result;
}
?>
