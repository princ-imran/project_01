<?php
include_once '../../../vendor/autoload.php';
$student = new App\admin\student\Student();
$student->delete($_GET['id']);

?>