<?php 
include_once 'connection.php';
if (isset($_POST['insert'])) {
    $heading = $_POST['heading'];
    // $price = $_POST['price'];
    $discription = $_POST['discription'];

    $image = file_get_contents($_FILES['image']['tmp_name']);
    $image = base64_encode($image);
    //insreting data
    $sql = "INSERT INTO images (heading, image, discription) VALUES ('$heading', '$image', '$discription')";
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
        header("Location: products.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if (isset($_POST['insert-image'])) {

    $image = file_get_contents($_FILES['image']['tmp_name']);
    $image = base64_encode($image);
    //insreting data
    $sql = "INSERT INTO slidshow (image) VALUES ('$image')";
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
        header("Location: products.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM images WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location: products.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


if (isset($_POST['delete-image'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM slidshow WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location: products.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_POST['del_cont'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM contact WHERE id = $id";

    if ($con->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location: Admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

   
    if (isset($_POST['del_reg'])) {
        $id = $_POST['id'];
    
        $sql = "DELETE FROM reg_acount WHERE id = $id";
    
        if ($con->query($sql) === TRUE) {
            echo "Record deleted successfully";
            header("Location: Admin.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

}


if (isset($_POST['del_order'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM orders WHERE id = $id";

    if ($con->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location: Admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$con->close();
?>
