<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
<div class="header">
    <h1>CRUD OPERATION</h1>
</div>
<div class="from">
    add new user:
<form action="insert.php" method="POST">

<label>names:</label><input type="text" name="names" placeholder="enter user name"><br><br>
<label>email:</label><input type="text" name="email" placeholder="enter user email"><br><br>
<input type="submit" name="add" value="add"><br><br>
</form>
</div>
<table class="user_table">
    <tr>
        <th>#</th>
        <th>names</th>
        <th>email</th>
        <th>action</th>

    </tr>
    
    <?php
    $conn=mysqli_connect("localhost","root","","operation_db");
   $alluser="SELECT * FROM operations ";
   $sqluser=mysqli_query($conn,$alluser);
   while ($user = mysqli_fetch_assoc($sqluser)) {
    echo'
    <tr>
    <td>'.$user['id'].'</td>
    <td>'.$user['names'].'</td>
    <td>'.$user['email'].'</td>
    <td class="action"><span> <a href="DeleteUser.php?id='.$user['id'].'">delete</a></span><spna><a href="updateuser.php?id='.$user['id'].'">update</a></span></td>
    </tr>';
   }
?>
   
</table>
</div>
</body>
</html>