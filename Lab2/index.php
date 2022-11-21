<?php require('./controller/register.class.php') ?>

<?php

    if(isset($_POST['submit'])){
        $user = new RegisterUser($_POST['username'], $_POST['email'], $_POST['phone'], $_POST['gender'], $_POST['password']);
    }

    if(isset($_GET['login'])){
        header("location: views/login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration form</title>
</head>
<body>
<h1>Employee Registration</h1>

<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
    <h2>Register form</h2>

    <table>
        <tr>
            <td>Client Name</td>
            <td><input type="text" name="username" placeholder="Enter your name"></td>
        </tr>
        
        <tr>
            <td>Client Email</td>
            <td><input type="email" name="email" placeholder="Enter your email"></td>
        </tr>
        <tr> 
            <td>Phone No</td>
            <td> <input type ="number" name="phone" placeholder="Enter your phone number"> </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="other">Other
            </td>
        </tr>
        <tr> 
            <td>Password</td>
            <td> <input type ="password" name="password" placeholder="Enter your password" > </td>
        </tr>

    </table>

    <button type="submit" name="submit">Register</button></br>

    <p class="error" style="color: red"><?php echo @$user->error ?></p>
    <p class="success" style="color: green"><?php echo @$user->success ?></p>
    <a href="?login">Login Page</a>
</form>

</body>
</html>