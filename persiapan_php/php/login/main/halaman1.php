<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman1</title>
</head>
<body>
    <h2>Selamat Datang</h2>
    <?php
    session_start();
    if($_SESSION['is_logged_in'] != TRUE)
    {
        header("Location : ../login_form.php");
        exit();
    }
    ?>
    <a href ="logout.php">Logout</a>
</body>
</html>