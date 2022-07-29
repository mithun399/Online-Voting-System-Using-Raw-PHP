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
    <form action="#" method="post">
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