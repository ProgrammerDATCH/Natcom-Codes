<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="crud.css">
</head>
<body>

<div class="container">
    <div class="insert">
        <p> Add New User: </p>
        <div class="insert-table">
            <form action="add.php" method="POST">
            <table>
                <tr>
                    <td>Names</td>
                    <td><input type="text" name="names" placeholder="Enter User names"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" placeholder="Enter User Email"></td>
                </tr>
                <tr class="submit-tr">
                    <td colspan="2">
                        <input type="submit" value="ADD" name="addUser">
                    </td>
                </tr>
            </table>
        </form>
        </div>
    </div>
    <div class="show-user">
        <table class="users-table">
            <tr class="tr-head">
                <th>#</th>
                <th>Names</th>
                <th>Emails</th>
                <th>Actions</th>
            </tr>
            <?php 
                include 'connection.php';
                $users_sql = "SELECT * FROM users";
                $all_users = mysqli_query($conn, $users_sql);
                while($user = mysqli_fetch_assoc($all_users)){
                    echo '
                    <tr>
                        <td> ' . $user['id'] . '</td>
                        <td>' . $user['names'] . '</td>
                        <td>' . $user['email'] . '</td>
                        <td class="actions"><span><a href="deleteUser.php?id=' . $user['id'] . '">Delete</a></span> <span><a href="updateUser.php?id=' . $user['id'] . '">Update</a></span></td>
                    </tr>
                    ';
                }
            ?>
            
        </table>
    </div>
</div>
    
</body>
</html>