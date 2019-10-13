<?php
require "../models/Connection.php";
require "../models/Student.php";
require "header.php";

$student = new Student();

$id = $_POST['id'];
?>

<h2 class="text-center">
    Редактировать ученика
</h2>

<hr>

<form method="post" action="../controllers/UpdateStudent.php">
    <div class="form-group col">
            <?php foreach ($student->getInfo("students", $id) as $info): ?>
            <div class="col-md-4" style="margin-left: auto; margin-right: auto; float: none;">
                <input type="text" class="form-control" name="surname" value="<?=$info['surname']?>" required autofocus>
                <br>
            </div>
            <div class="col-md-4" style="margin-left: auto; margin-right: auto; float: none;">
                <input type="text" class="form-control" name="first_name" value="<?=$info['first_name']?>" required autofocus>
                <br>
            </div>
            <div class="col-md-4" style="margin-left: auto; margin-right: auto; float: none;">
                <input type="text" class="form-control" name="middle_name" value="<?=$info['middle_name']?>" required autofocus>
                <br>
            </div>
            <div class="col-md-4" style="margin-left: auto; margin-right: auto; float: none;">
                <input type="date" class="form-control" name="birth_date" value="<?=$info['birth_date']?>" required>
                <br>
            </div>
            <div class="col-md-4" style="margin-left: auto; margin-right: auto; float: none;">
                <input type="hidden" name="id" value="<?=$info['id']?>">
                <?php endforeach; ?>
                <button class="btn btn-dark btn-lg">Сохранить</button>
                <a href="../index.php" class="btn btn-dark btn-lg" style="margin-left: 182px">Отменить</a>
            </div>
        </div>
</form>


