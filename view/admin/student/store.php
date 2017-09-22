<?php
include_once '../../../vendor/autoload.php';
$student = new App\admin\student\Student;
$student->set($_POST);
$student->store();

?>