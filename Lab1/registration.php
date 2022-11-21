<?php include("./validation.php") ?>
<html>
    <head>
        <title>Client Registration Page</title>
    </head>
    <body>
        <h1>Client Registration</h1>
        <form action="" method="POST">
        <p style="color: red;"><?php if(isset($matching_error)) echo $matching_error; ?></p>
            <table>
                <tr>
                    <td>Client Name</td>
                    <td><input type="text" name="name" placeholder="Enter your name"></td>
                    <td><p style="color: red;"><?php if(isset($name_error)) echo $name_error; ?></p></td>
                </tr>
                <tr>
                    <td>Client Email</td>
                    <td><input type="email" name="email" placeholder="Enter your email"></td>
                    <td><p style="color: red;"><?php if(isset($email_error)) echo $email_error; ?></p></td>
                </tr>
                <tr> 
                    <td>Phone No</td>
                    <td> <input type ="number" name="phone" placeholder="Enter your phone number"> </td>
                    <td><p style="color: red;"><?php if(isset($phone_error)) echo $phone_error; ?></p></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" name="gender" value="female">Female
                        <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="other">Other
                    </td>
                    <td><p style="color: red;"><?php if(isset($gender_error)) echo $gender_error; ?></p></td>
                </tr>
                <tr> 
                    <td>Password</td>
                    <td> <input type ="password" name="password" placeholder="Enter your password" > </td>
                    <td><p style="color: red;"><?php if(isset($password_error)) echo $password_error; ?></p></td>
                </tr>

                <tr> 
                    <td> Confirm Password</td>
                    <td> <input type ="password" name="confirm_password" placeholder="Confirm yoyr password" > </td>
                    <td><p style="color: red;"><?php if(isset($confirm_error)) echo $confirm_error; ?></p></td>
                </tr>
                <tr>
                    <td> <button type ="submit">Submit </button></td>
                </tr> 
                <tr>
                    <td></td>
                    <td><p style="color: green;"><?php if(isset($success_msg)) echo $success_msg; ?></p></td>
                </tr>     
            </table>

        </form>
     
    </body>

</html>