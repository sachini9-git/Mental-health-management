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
        <h1>TJ<span> INDUSTRIES</h1>
        <h2>Add <span>Products</h2>
    </header>

    <nav>
        <a href="Admin.php">Home</a>
        <a href="booking.php">Booking</a>
        <a href="">Our Services</a>
        <!-- <a href="message.php">Messege</a> -->
        <a href="custom1.php">Custom Home</a>
    </nav>
    

    <div class="container">
        
        <section class="portfolio" id="portfolio">
                <div class="dashboard-section">
                    <h2>Add Images To Our Services</h2>
                    
                        <?php
                        include_once 'connection.php';

                        // SQL query to retrieve data from the table
                        $sql = "SELECT * FROM images";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            echo "<table>";
                            echo "<tr><th>Id</th><th>Heading</th><th>Discription</th><th>Images</th></tr>";
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr><td>{$row['id']}</td><td>{$row['heading']}</td><td>{$row['discription']}</td><td><img src='data:image;base64,{$row['image']} ' alt='Image' style='width: 50px;'></td></tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "0 results";
                        }
                        ?>
                    
                </div>


               
                <form action="custom.php" method="post" enctype="multipart/form-data">
                    <div class="dashboard-section">
                        <div class="portfolio-container">
                            <div class="input-box">
                            <label for="name">Heading :</label>
                            <input type="text" name="heading" required>
                          
                            <label for="image">Image:</label>
                            <!-- <input type="file" name="image" accept="image/*" required> -->
                            <input type="file" name="image" id="fileInput" accept="image/*" required>
                            <br><br>

                            <label for="name">Discription:</label>
                            <input type="text" name="discription" required>
                         
                            </div>
                            <div class="btn">
                                <button type="submit" name="insert">insret</button>
                            </div>
                        </div>
                    </div>
                </form>
                <form action="custom.php" method="post">
                    <label for="id">ID to delete:</label>
                    <input type="number" name="id" required>
                    <div class="btn">
                        <button type="submit" name="delete">Delete Data</button>
                    </div>
                </form>
    </section>
<nav></nav>
<hr>

                <div class="dashboard-section">
                    <h2>Add Images To Slidshow</h2>
                        <?php
                        
                        include_once 'connection.php';

                        // SQL query to retrieve data from the table
                        $sql = "SELECT * FROM slidshow";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            echo "<table>";
                            echo "<tr><th>Id</th><th>Images</th></tr>";
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr><td>{$row['id']}</td><td><img src='data:image;base64,{$row['image']} ' alt='Image' style='width: 80px;'></td></tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "0 results";
                        }

                        // Close the database connection
                       
                        $conn->close();
                        ?>
                    
                </div>

                <form action="custom.php" method="post" enctype="multipart/form-data">
                    <div class="dashboard-section">
                    <h2>Add Images To Slideshow Containar </h2>
                        <div class="portfolio-container">
                            <div class="input-box">
                             <label for="image">Image:</label>
                            <input type="file" name="image" id="fileInput" accept="image/*" required>
                            <br><br>
                            </div>
                            <div class="btn">
                                <button type="submit" name="insert-image">insret</button>
                            </div>
                        </div>
                    </div>
                </form>
                <form action="custom.php" method="post">
                    <label for="id">ID to delete:</label>
                    <input type="number" name="id" required>
                    <div class="btn">
                        <button type="submit" name="delete-image">Delete Data</button>
                    </div>
                </form>

    </div>


</body>
</html>