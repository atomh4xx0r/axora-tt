<?php
include 'models/Connection.php';
include 'models/Student.php';
$student = new Student();
?>
<!DOCTYPE html>
<html>
<head>
    <?php include 'views/header.php'; ?>
</head>
<body>

<div class="container">

    <h1 class="text-left" style="margin-top: 20px">Школьный журнал</h1>

    <h1 class="text-right">
        <a href="index.php" class="btn btn-dark btn-xs">
            Обновить страницу
        </a>
        <a href="views/create_student.php" class="btn btn-dark btn-xs">
            Добавить ученика
        </a>
    </h1>
        <table class="table table-striped table-dark">
            <thead class="thead">
            <tr>
                <th>Фамилия</th>
                <th>Имя</th>
                <th>Отчество</th>
                <th>Дата рождения</th>
                <th>Возраст</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($student->listStudent("students") as $std): ?>
            <tr>
                <td><?php echo $std['surname']; ?></td>
                <td><?php echo $std['first_name']; ?></td>
                <td><?php echo $std['middle_name']; ?></td>
                <td><?php echo date("d/m/Y", strtotime($std['birth_date'])); ?></td>
                <td><?php echo $std['age']; ?> </td>
<!--                <td>--><?php //foreach ($student->updateAge("students") as $std_age): ?>
<!--                    --><?php //echo $std_age['age']; ?>
<!--                    --><?php //endforeach; ?>
<!--                </td>-->
                <td>
                    <form method="POST" action="views/update_student.php">
                        <input type="hidden" name="id" value="<?=$std['id']?>">
                        <button class="btn btn-dark btn-xs">Редактировать ученика</button>
                    </form>
                </td>
                <td>
                    <form method="POST" action="controllers/DeleteStudent.php">
                        <input type="hidden" name="id" value="<?=$std['id']?>">
                        <button class="btn btn-dark btn-xs">Удалить ученика</button>
                    </form>
                </td>
            </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
</div>

</body>
</html>