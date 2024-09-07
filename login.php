<?php
//database connection 
//include_once 'conn.php';
include_once 'connection.php';

// Retrieve data from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Retrieve user data from the database
$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<script>alert("Login Successfully");</script>';
    header("Location: Admin.php");
}else{
    echo '<script type="text/javascript">';
    echo 'alert("This is a JavaScript message box from PHP!");';
   

    header("Location: index.html");
    echo '</script>';
}

// Close the database connection
$conn->close();
?>