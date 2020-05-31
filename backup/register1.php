<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>User Registration</title>
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
$query = mysqli_query($conn, "SELECT * FROM details WHERE username='".$user."'");
$numrows = mysqli_num_rows($query);
if($numrows == 0)
{
//Insert to Mysqli Query
$sql = "INSERT INTO details(username,password) VALUES('$user','$pass')";
$result = mysqli_query($conn, $sql);
//Result Message
if($result)
{
    echo '<script language="javascript">';
    echo 'alert("successfully  registered");';
    echo 'window.location.href = "login1.php";';
    echo '</script>';
    echo "success";
}
else
{
echo "Failure!";
}
}
else
{
echo "That Username already exists! Please try again.";
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
<center><h2 style="color:black">Create an Account</h2></center><br>
<form action="" method="post">
<center>USERNAME: <input type="text" id="user" name="user" ></center><br><br>
<center>PASSWORD: <input type="password" id="pass" name="pass"><br></center><br>
<center><input type="submit" value="Register" name="submit"><br><br></center>
</form>
<center><p id="msg" style="display: none">registered</p></center>
<center><a href="login1.php">Go to login page</a></center><br>
</body>
</html>