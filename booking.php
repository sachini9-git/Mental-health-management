


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Admin</title>

    <link rel="shortcut icon" href="./image/TJ-Logo1.png">
	<link rel="stylesheet" href="./Style.css">
    
</head>
<body>

<header>
    <a href="#" class="logo"><img src="./images/High-Quality Transparent File-02.png" alt="" /></a>
        <h1>TJ INDUSTRIES</h1>

        <h2>Item <span>Orders</h2>
    </header>

    <nav>
        <a href="Admin.php">Home</a>
        <a href="booking.php">Booking</a>
        <a href="products.php">Our Services</a>
        <!-- <a href="message.php">Messege</a> -->
        <a href="custom1.php">Custom Home</a>
    </nav>
    
    <div class="container">
    <div class="dashboard-section">
    <h2>Ordered Item Details</h2>
    <?php
    // Include the database connection file
    // include 'conn.php';

    // // SQL query to retrieve data from the table
    // $sql = "SELECT * FROM orders";
    // $result = $con->query($sql);

    // if ($result->num_rows > 0) {
    //     echo "<table>";
    //     echo "<tr><th>Order_Id</th><th>User_Id</th><th>Username</th><th>Address</th><th>Email</th><th>Item-Name</th><th>Quantity</th><th>Price</th><th>Statuss</th></tr>";
    //     while ($row = $result->fetch_assoc()) {
    //         echo "<form action='' method='POST'>";
    //         echo "<tr>
    //                 <td>{$row['id']}</td>
    //                 <td>{$row['user_id']}</td>
    //                 <td>{$row['username']}</td>
    //                 <td>{$row['address']}</td>
    //                 <td>{$row['email']}</td>
    //                 <td>{$row['i_name']}</td>
    //                 <td>{$row['quantity']}</td>
    //                 <td>{$row['total_price']}</td>
    //                 <td>{$row['statuss']}</td>
    //                 <td>
    //                 <input type='hidden' name='id' value='{$row['id']}'>
    //                     <select name='statuss' onchange='this.form.submit();'>
    //                         <option selected disabled>Choose</option>
    //                         <option value='accepted'>Accepted</option>
    //                         <option value='ready'>Ready</option>
    //                         <option value='onDelivery'>On Delivery</option>
    //                         <option value='delivered'>Delivered</option>
    //                     </select>
                       
                        
    //                 </td>
    //               </tr>";
    //         echo "</form>";
    //     }
    //     echo "</table>";
    // } else {
    //     echo "0 results";
    // }

    // Handle form submission when Done_btn is clicked
    //  if (isset($_POST['statuss'])) {
    //     // Check if 'id' and 'statuss' are set in the $_POST array
    //     if (isset($_POST['id'], $_POST['statuss'])) {
    //         $orderId = $_POST['id'];
    //         $statuss = $_POST['statuss'];

    //         // Use prepared statements to prevent SQL injection
    //         $updateSql = $con->prepare("UPDATE orders SET statuss = ? WHERE id = ?");
    //         $updateSql->bind_param("si", $statuss, $orderId);

    //         if ($updateSql->execute()) {
    //             echo "Updated successfully";
    //         } else {
    //             echo "Error updating record: " . $updateSql->error;
    //         }

    //         // Close the prepared statement
    //         $updateSql->close();
    //     } else {
    //         echo "Error: 'id' or 'statuss' not set in the form submission.";
    //     }
    // }

    // // Close the database connection
    // $con->close();

        include_once 'connection.php';
    // SQL query to retrieve data from the table
    $sql = "SELECT * FROM book_now";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Id</th>><th>Username</th><th>Contact</th><th>Email</th><th>Preferred-time</th><th>Preferred-data</th><th>Selected-services</th><th>Reason</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<form action='' method='POST'>";
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['username']}</td>
                    <td>{$row['contact_no']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['preferred_time']}</td>
                    <td>{$row['preferred_date']}</td>
                    <td>{$row['selected_services']}</td>
                    <td>{$row['reason']}</td>
                
                  </tr>";
            echo "</form>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    ?>
</div>
        
            
       
        <form action="" method="post">
                    <label for="id">ID to delete:</label>
                    <input type="number" name="id" required>
                    <div class="btn">
                        <button type="submit" name="delete">Delete Data</button>
                    </div>
                
                <?php
                include 'conn.php';
                if (isset($_POST['delete'])) {
                    $id = $_POST['id'];
                
                    $sql = "DELETE FROM orders WHERE id = $id";
                
                    if ($con->query($sql) === TRUE) {
                        echo "<script>alert('Record deleted successfully');</script>";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }
                
                
                
                $conn->close();
                
                ?>
                </form>
<nav></nav>
    </div>

</body>
</html>