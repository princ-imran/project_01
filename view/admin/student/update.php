<?php
include_once '../../../vendor/autoload.php';
$student = new App\admin\student\Student;
$result = $student->set($_POST);
$result->update();
?>