<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Insert Data</title>
</head>
<body>
<?php
if(isset($_POST["submit"])){
    if(!empty($_POST['fname']) && !empty($_POST['lname'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mail = $_POST['mail'];
        $servername = "localhost";
        $username = "root";
        $password = "password";
        $dbname = "dell";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "INSERT INTO myguests(firstname, lastname, email) VALUES('$fname','$lname','$mail')";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo '<script language="javascript">';
            echo 'alert("Data inserted successfully");';
            echo '</script>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        $conn->close();
    }
}
?>
<h1 style="color:white;text-align:center;background-color:blue;">INFOVIEW TECHNOLOGIES</h1><br>
<center><h2 style="color:black">Insert Data</h2></center><br>
<form action="" method="post">
<center>Firstname: <input type="text" id="fname" name="fname" style="width: 25%"></center><br><br>
<center>Lastname: <input type="text" id="lname" name="lname" style="width: 25%"><br></center><br><br>
<center>E-mail: <input type="text" id="mail" name="mail" style="width: 25%"><br></center><br>
<center><input type="submit" value="Submit" name="submit"><br><br></center>
</form>
</body>
</html>