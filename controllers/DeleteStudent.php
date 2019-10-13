<?php

include '../models/Connection.php';
include '../models/Student.php';

$student = new Student();

$id = $_POST['id'];

if (isset($id) && !empty($id)) {
    $student->deleteStudent("students", $id);

    header("Location: ../index.php?student_deleted");
}