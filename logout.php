<?php
session_start();
session_destroy();
header('Location: login.php');
exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>You have been logged out</h2>
        <a class="logout" href="login.php">Login Again</a>
    </div>
</body>
</html>
