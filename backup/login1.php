<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>User Login</title>
</head>
<body>
<?php
if(isset($_POST["submit"])){
if(!empty($_POST['user']) && !empty($_POST['pass'])){
$user = $_POST['user'];
$pass = $_POST['pass'];
// $conn = new mysqli('127.0.0.1', 'root', 'password'); // DB Connection
$servername = "localhost";
$username = "root";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $username, $password) or die(mysqli_connect_error());
$db = mysqli_select_db($conn, 'dell'); // Select DB from database
//Selecting Database
$query = mysqli_query($conn, "select * from details where username='$user' and password='$pass'");
$numrows = mysqli_num_rows($query);
if($numrows>=1)
{
//         header("Location:home.html");
    echo "Username available";
}
else {
    echo "Username not available";
}
}
else
{
?>
<!--Javascript Alert -->
<script>alert('Required all felds');</script>
<?php
}
}
?>
<h1 style="color:white;text-align:center;background-color:blue;">INFOVIEW TECHNOLOGIES</h1><br>
<center><h2 style="color:black">Login</h2></center><br>
<form action="" method="post">
<center>USERNAME: <input type="text" id="user" name="user" ></center><br><br>
<center>PASSWORD: <input type="password" id="pass" name="pass"><br></center><br>
<center><input type="submit" value="login" name="submit"><br><br></center>
</form>
<center><a href="../php/register.php">Register</a></center><br>
</body>
</html>