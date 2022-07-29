<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div id="head">
    <h1>Online Voting System</h1>
    
    </div>
    <hr>
   <div id="body">
   <form action="" method="post">
    <h3>Login</h3>
    <input type="number" name="mobile" placeholder="Enter Your Number"><br><br>
    <input type="password" name="password" placeholder="Enter Your Password"><br><br>
    <select name="role" id="box">
        <option value="1">voter</option>
        <option value="2">group</option>
    </select><br><br>
    <button type="submit" id="btn">Login</button>
    <p>New user?<a href="register.php">Register here..</a></p>

    </form>
   </div>
   
</body>
</html>

<?php
session_start();
include('connect.php');
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$role=$_POST['role'];
$check=mysqli_query($connect,"SELECT * FROM user  WHERE mobile='$mobile' AND password='$password' AND role='$role') ");
if(mysqli_num_rows($check)>0){
    $data=mysqli_fetch_array($check);
    $groups=mysqli_query($connect,"SELECT * FROM user where role=2");
    $groupData=mysqli_fetch_all($groups,MYSQLI_ASSOC);
    $_SESSION['data']=$data;
    $_SESSION['groupData']=$groupData;
    echo '
    <script>
   
    window.location="dashboard.php";
    </script>
    ';
}
else {
    echo '
    <script>
    alert("Failed to login");
    window.location="login.php";
    </script>
    ';
}
?>