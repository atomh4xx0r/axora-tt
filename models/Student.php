<?php

class Student extends Connection
{
    public function insertStudent($table, $data) {
        $pdo = parent::getInstance();
        $fields = implode(", ", array_keys($data));
        $values = ":".implode(", :", array_keys($data));
        $sql = "INSERT INTO $table ($fields) VALUES ($values)";
        $statement = $pdo->prepare($sql);
        foreach ($data as $key => $value) {
            $statement->bindValue(":$key", $value, PDO::PARAM_STR);
        }
        $statement->execute();
    }
    public function listStudent($table) {
        $pdo = parent::getInstance();
        $sql = "SELECT * FROM $table ORDER BY surname ASC; UPDATE $table SET age = TIMESTAMPDIFF(YEAR, birth_date, CURDATE())";
        $statement = $pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }
    public function getInfo($table, $id) {
        $pdo = parent::getInstance();
        $sql = "SELECT * FROM $table WHERE id = :id";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(":id", $id);
        $statement->execute();
        return $statement->fetchAll();
    }
    public function deleteStudent($table, $id) {
        $pdo = parent::getInstance();
        $sql = "DELETE FROM $table where id = :id";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(":id", $id);
        $statement->execute();
    }
    public function updateStudent($table, $data, $id) {
        $pdo = parent::getInstance();
        $new_values = "";
        foreach ($data as $key => $value) {
            $new_values .= "$key=:$key, ";
        }
        $new_values = substr($new_values, 0, -2);
        $sql = "UPDATE $table SET $new_values WHERE id = :id";
        $statement = $pdo->prepare($sql);
        foreach ($data as $key => $value) {
            $statement->bindValue(":$key", $value, PDO::PARAM_STR);
        }
        $statement->bindValue(":id", $id);
        $statement->execute();
    }
//    public function updateAge($table) {
//        $pdo = parent::getInstance();
//        $sql = "UPDATE $table SET age = TIMESTAMPDIFF(YEAR, birth_date, CURDATE())";
//        $statement = $pdo->query($sql);
//        $statement->execute();
//        return $statement->fetchAll();
//    }
}