<?php

include '../models/Connection.php';
include '../models/Student.php';

$student = new Student();

$data = $_POST;

if (isset($data) && !empty($data)) {
    $student->insertStudent("students", $data);
    header("Location: ../index.php?student_add_success");
}