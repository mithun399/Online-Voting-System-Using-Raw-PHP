<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div id="head">
    <h1>Online Voting System</h1>
    </div>
    <hr>
    <h3>Registration</h3>
    <div id="body">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Enter Your Name">
        <input type="number" name="mobile" placeholder="Enter Your Mobile"><br><br>
        <input type="password" name="password1" placeholder="Enter Your Password">
        <input type="password" name="password2" placeholder="Enter Your Password"><br><br>
        <input id="add" type="text" name="address" placeholder="Enter Your Address"><br><br>
        <center>
        <div id="img">
       Upload Image: <input type="file" name="img" placeholder="Enter Your Image"><br><br>
       </div>
       </center><br><br>
       <center>
        <div id="img">
       Select Role: <select name="role" id="box">
            <option value="1">voter</option>
            <option value="2">group</option>
        </select><br><br>
        </div>
       </center>
        <button id="btn">Register</button><br><br>
        <p>Already user?<a href="index.php">Login Here..</a></p>

    </form>
    </div>
</body>
</html>

<?php
include('connect.php');
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
$address=$_POST['address'];
$img=$_FILES['img']['name'];
$tmp_name=$_FILES['img']['tmp_name'];
$role=$_POST['role'];
if ($password1==$password2) {
    move_uploaded_file($tmp_name,"../img/$img");
    $insert=mysqli_query($connect,"INSERT INTO user (name,mobile,address,password,photo,role,status,votes) VALUES('$name','$mobile','$address','$password1','$img','$role',0,0)");
    if($insert){
        echo '
        <script>
        alert("Registration Successfull");
        window.location="index.php";
        </script>
        '; 
    }
    else {
        echo '
        <script>
        alert("Failed to register");
        window.location="register.php";
        </script>
        ';
    }
} else {
    echo '
    <script>
    alert("password not mathch");
    window.location="register.php";
    </script>
    ';
}


?>