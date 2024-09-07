<?php

include_once 'connection.php';
if(isset($_POST['reg'])){
    $name = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $tel = $_POST['telephone'];

    $sql = "INSERT INTO reg_account (username, tel, email, password) VALUES ('$name', '$tel', '$email', '$password')";
    //sql = "INSERT INTO reg_account (username, password, email, tel) VALUES ('$name', '$password', '$email', '$tel')";
    if($con->query($sql) === true){
        echo '<script>alert("Inserted");</script>';
    }else{
        echo '<script>alert("Failed");</script>';
    }
}
$con->close();
?>