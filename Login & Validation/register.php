<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new Account</title>
    <style>
        .err{
            color: red;
        }
    </style>
</head>
<body>

    <form action="insert.php" method="POST" id="form">
        <table>
            
            <tr>
                <td colspan="2" class="err">
                    <?php
                        if(isset($_GET['msg'])){
                            if($_GET['msg'] == "invalid_input"){
                                echo "Fill all fields please!";
                            }
                            if($_GET['msg'] == "password_not_match"){
                                echo "Password should match!";
                            }
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" id="nameInput" value="<?php if(isset($_GET['name'])) echo $_GET['name']; ?>"></td>
                
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" value="<?php if(isset($_GET['email'])) echo $_GET['email']; ?>"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Confirm-Password:</td>
                <td><input type="password" name="confirmPassword"></td>
            </tr>
            <tr>
                <td><input type="submit" name="add" value="ADD"></td>
            </tr>
        </table>
    </form>

</body>
</html>