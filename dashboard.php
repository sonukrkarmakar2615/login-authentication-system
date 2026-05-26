<?php
session_start();

if(!isset($_SESSION['email'])) {
    header("Location: index.html");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Welcome User</h1>
    <p>Login Successful</p>

    <a href="logout.php"><button>Logout</button></a>
</div>

</body>
</html>