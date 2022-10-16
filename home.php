
<?php
include("../process_program/process.php");
?>
<html>

    <head>
        <title>Client Registration Form</title>
    </head>
    <body>
    <form action= "" method="post">
        <h1 style=text-align:center> Client Registration Form </h1>
        <form>
            <table>
                <tr>
                    <td>
                        Applicant Name </td>

                        <td> <select name="name">
                          <option value="Mr.">  Mr </option>
                          <option value="Mrs.">  Mrs </option>
        </select>
                        <input type="text" placeholder=" Enter your first Name" name="">
                    </td>
                    <td> Last Name </td>
                    <td>
                    <input type= "text" name= "name" placeholder="Enter Your last Name"> </td>

                    
                    <td> <?php echo $nameError; ?> </td>
                </tr>
                <tr>
                    <td>
                        Mobile No:
                    </td>
                    <td>
                        <input type="Mobileno" placeholder="01******">
                    </td>
                    <td> <?php echo $MobilenoError; ?> </td>
                </tr>
                <tr>
                    <td>
                        Email Id:
                    </td>
                    <td>
                        <input type="email" placeholder="example1@*8">
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="password" placeholder="Password">
                    </td>
                </tr>
            <tr>
                <td>
                    Gender:
                </td>
                <td>
                    <input type="radio" name="gender">Male
                    <input type="radio" name="gender">Female
                </td>
            </tr>
            <tr>
                <td>
                    Date of Birth:
                </td>
                <td>
                    <input type="date">
                </td>
            </tr>
            <tr>
                <td>
                    
                    Education Qualification:
                </td>
                <td>
                    <select>
                        <option>Select Option</option>
                        <option>10+2</option>
                        <option>Graduation</option>
                        <option>Postgraduation</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Address:
                </td>
                <td>
                    <textarea rows="5" col="17" placeholder="Address"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="enter" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
            </table>
        </form>
        </body>
</html>