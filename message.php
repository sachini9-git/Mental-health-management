<?php
// Include the database connection file

include 'conn.php';

// Handle form submission when reply button is clicked
if (isset($_POST['reply_btn'])) {
    // Check if 'id' is set in the $_POST array
    if (isset($_POST['id'])) {
        $orderId = $_POST['id'];
        $reply = $_POST['reply'];

        // Update the messages table with the reply for the corresponding id
        $updateSql = "UPDATE messages SET replay = '$reply' WHERE id = $orderId";
        if ($con->query($updateSql) === TRUE) {
            echo "Reply added successfully";
        } else {
            echo "Error updating record: " . $con->error;
        }
    } else {
        echo "Error: 'id' not set in the form submission.";
    }
}

// SQL query to retrieve data from the table
$sql = "SELECT * FROM messages";
$result = $con->query($sql);
?>

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
        <h2>messages</h2>
    </header>

    <nav>
        <a href="Admin.php">Home</a>
        <a href="booking.php">Booking</a>
        <a href="products.php">Our Services</a>
        <a href="message.php">Messege</a>
        <a href="custom1.php">Custom Home</a>
    </nav>

    <div class="container">
        <section class="portfolio" id="portfolio">
            <div class="dashboard-section">
                <h2>Customer Inquiries</h2>

                <?php
                if ($result->num_rows > 0) {
                    echo "<table>";
                    echo "<tr><th>ID</th><th>Username</th><th>Message</th><th>Reply</th></tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<form action='' method='POST'>";
                        echo "<tr><td>{$row['id']}</td><td>{$row['username']}</td><td>{$row['message']}</td>";
                         // Add a hidden input field to store the 'id' value
                        echo "<input type='hidden' name='id' value='{$row['id']}'>";
                        echo "<td><input type='text' name='reply' placeholder='Enter your reply' required ></td>";
                        echo "<td><button name='reply_btn' type='submit' value='{$row['id']}'>Reply</button></td></tr>";
                        echo "<tr><td colspan='4'>{$row['replay']}</td></tr>";
                        echo "</form>";
                    }

                    echo "</table>";
                } else {
                    echo "No messages found.";
                }
                ?>
            </div>
            <form action="custom.php" method="post">
                    <label for="id">ID to delete:</label>
                    <input type="number" name="id" required>
                    <div class="btn">
                        <button type="submit" name="del_msg">Delete Data</button>
                    </div>
                </form>
        </section>
    </div>

    <!-- <footer>
        <p>&copy; 2023 TJ Industries</p>
    </footer> -->
</body>
</html>
