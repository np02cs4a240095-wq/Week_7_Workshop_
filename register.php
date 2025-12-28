<?php
require 'db.php';

if (isset($_POST['register'])) {
    $student_id = $_POST['student_id'];
    $full_name = $_POST['full_name'];
    $password = $_POST['password'];

    // password hash
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // insert using prepared statement
    $sql = "INSERT INTO students (student_id, full_name, password_hash)
            VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$student_id, $full_name, $hashed_password]);

    header("Location: login.php");
}
?>

<h2>Student Registration</h2>
<form method="post">
    Student ID: <input type="text" name="student_id" required><br><br>
    Full Name: <input type="text" name="full_name" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button name="register">Register</button>
</form>
