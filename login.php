<?php 
//database connection
include_once 'connn.php';

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["name"];
    $password = $_POST["password"];

    // Validate user credentials
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, store user information in the session
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row["id"];
        $_SESSION['username'] = $row["username"];
        $_SESSION['email'] = $row["email"];
        $_SESSION['number'] = $row["number"];
        $_SESSION['course_name'] = $row["cource_name"];


        // Redirect to a new page
        header("Location: index.html");
        exit();
}
}
?>