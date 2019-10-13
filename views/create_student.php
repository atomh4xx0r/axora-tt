<?php require 'header.php'; ?>

<h1 class="text-center">Добавить ученика</h1>

<hr>
<form method="post" action="../controllers/CreateStudent.php">
    <div class="form-group col">
            <div class="col-md-4" style="margin-left: auto; margin-right: auto; float: none;">
                <input type="text" class="form-control" name="surname" placeholder="Фамилия" required autofocus>
                <br>
            </div>
            <div class="col-md-4" style="margin-left: auto; margin-right: auto; float: none;">
                <input type="text" class="form-control" name="first_name" placeholder="Имя" required>
                <br>
            </div>
            <div class="col-md-4" style="margin-left: auto; margin-right: auto; float: none;">
                <input type="text" class="form-control" name="middle_name" placeholder="Отчество" required>
                <br>
            </div>
            <div class="col-md-4" style="margin-left: auto; margin-right: auto; float: none;">
                <input type="date" class="form-control" name="birth_date" placeholder="Дата рождения" required>
                <br>
            </div>
            <div class="col-md-4" style="margin-left: auto; margin-right: auto; float: none;">
                <button class="btn btn-dark btn-lg">Сохранить</button>
                <a href="../index.php" class="btn btn-dark btn-lg" style="margin-left: 182px">Отменить</a>
            </div>
    </div>
</form>