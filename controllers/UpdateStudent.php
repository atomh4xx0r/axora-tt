<?php

include '../models/Connection.php';
include '../models/Student.php';

$student = new Student();

$update_student = $_POST;
$id = $_POST['id'];

if (isset($id) && !empty($id)) {
    $student->updateStudent("students", $update_student, $id);

    header("Location: ../index.php?student_updated");
    header("Refresh:0");
}