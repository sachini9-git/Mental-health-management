<?php 
include_once 'connn.php';
session_start();

if (isset($_POST['send_btn'])) {
    // Get the message from the form
    $username = $_POST['name'];
    $message = $_POST['message'];

    // Insert the message into the database
    $sql = "INSERT INTO feedback (name, message) VALUES ('$username', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>