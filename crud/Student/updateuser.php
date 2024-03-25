<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><?php
    $conn=mysqli_connect("localhost","root","","operation_db");
    $user=$_GET['id'];
    $update="SELECT * FROM operations WHERE id=$user";
    $query=mysqli_query($conn,$update);
    $user_data=mysqli_fetch_assoc($query);
    $currentName=$user_data['names'];
    $currentemail=$user_data['email'];
    
echo'
  <form action="updatefunction.php" method="post">
  name:<input type="text" name="names" value="'.$currentName.'">
  email:<input type="text" name="email" value="'.$currentemail.'">
  <input type="hidden" name="id" value="'.$user.'">
  <input type="submit" name="submit" value="update">
  </form>';




?>


    </form>
</body>
</html>