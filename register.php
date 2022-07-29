<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Online Voting System</h1>
    <hr>
    <h3>Registration</h3>
    <form action="#" method="post">
        <input type="text" name="name" placeholder="Enter Your Name">
        <input type="number" name="mobile" placeholder="Enter Your Mobile"><br><br>
        <input type="password" name="password1" placeholder="Enter Your Password">
        <input type="password" name="password2" placeholder="Enter Your Password"><br><br>
        <input type="text" name="address" placeholder="Enter Your Address"><br><br>
       Upload Image: <input type="file" name="img" placeholder="Enter Your Image"><br><br>
       Select Role: <select name="role" id="">
            <option value="1">voter</option>
            <option value="2">group</option>
        </select><br><br>
        <button>Register</button>
        <p>Already user?<a href="#">Login Here..</a></p>

    </form>
</body>
</html>