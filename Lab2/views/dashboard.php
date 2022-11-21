<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("location: login.php");
        exit();
    }

    if(isset($_GET['logout'])){
        unset($_SESSION['user']);
        header("location: login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard page</title>
</head>
<body>
    <header>
        <h2>Welcome <?php echo $_SESSION['user']; ?></h2>
        <a href="?logout">Log Out</a>
    </header>
    <main>
        <h3>This is Employee Page</h3>
        <p>Email: <?php echo $_SESSION['email']; ?></p>
        <p>Phone: <?php echo $_SESSION['phone']; ?></p>
        <p>Gender: <?php echo $_SESSION['gender']; ?></p>
    </main>
</body>
</html>