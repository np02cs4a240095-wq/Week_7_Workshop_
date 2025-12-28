<?php
session_start();

// session check
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
}

// cookie theme check
$theme = $_COOKIE['theme'] ?? 'light';
?>

<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-color: <?= ($theme == 'dark') ? 'black' : 'white' ?>;
    color: <?= ($theme == 'dark') ? 'white' : 'black' ?>;
}
</style>
</head>

<body>
<h2>Welcome, <?= $_SESSION['name']; ?> 👋</h2>

<a href="preference.php">Change Theme</a> |
<a href="logout.php">Logout</a>

</body>
</html>
