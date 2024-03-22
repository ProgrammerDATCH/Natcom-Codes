<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<body>

    <form action="updateUserFunction.php" method="post">
        <?php
            include 'connection.php';
            $user_id = $_GET['id'];
            $sql = "SELECT * FROM users WHERE id = $user_id";
            $user = mysqli_query($conn, $sql);
            $user_data  = mysqli_fetch_assoc($user);
            $currentEmail = $user_data['email'];
            $currentName = $user_data['names'];
            echo '<table>
                <tr>
                    <td>Names: </td>
                    <td><input type="text" name="names" value="'. $currentName . '"></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="email" value="'. $currentEmail . '"></td>
                </tr>
                <tr>
                <td colspan=2>
                    <input type="hidden" name="user_id" value="' . $user_id . '">
                </td>
                </tr>
                <tr>
                    <td colspan=2> <input type="submit" value="UPDATE" ></td>
                </tr>

            </table>';
        ?>
       
    </form>

    
</body>
</html>