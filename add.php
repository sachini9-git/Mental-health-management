<?php 
// include_once 'conn.php';
// if (isset($_POST['Insert'])) {
//     // Retrieve form data
//     $username = $_POST['name'];
//     $password = $_POST['password'];

//     // SQL query to insert data into the database
//     $sql = "INSERT INTO admin_acount (name, password) VALUES ('$username', '$password')";

//     // Execute the query
//     if ($con->query($sql) === TRUE) {
//         echo "Record inserted successfully";
        
//         header("Location: custom.html");
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
// }
    include_once 'connection.php';
        if (isset($_POST['insert'])) {
            $heading = $_POST['heading'];
            $discription = $_POST['discription'];
            $sql = "INSERT INTO discriptions (heading, discription) VALUES ('$heading', '$discription')";
            if ($conn->query($sql) === TRUE) {
                echo "Data inserted successfully";
                header("Location: custom1.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    if (isset($_POST['insert-mem'])) {
        $name = $_POST['name'];
        $position = $_POST['position'];
    
        $image = file_get_contents($_FILES['image']['tmp_name']);
        $image = base64_encode($image);
        //insreting data
        $sql = "INSERT INTO members (name, image, position) VALUES ('$name', '$image', '$position')";
        if ($conn->query($sql) === TRUE) {
            echo "Data inserted successfully";
            header("Location: custom1.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

?>