<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Admin</title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="./Style.css">
    
    <style>
      
    </style>
</head>
<body>
    <header>
    <a href="#" class="logo"><img src="./images/High-Quality Transparent File-02.png" alt="" /></a>
        <h1>TJ INDUSTRIES</h1>
        <h2>Add <span>Admin</span></h2>
    </header>

    <nav>
        <a href="Admin.php">Home</a>
        <a href="booking.php">Booking</a>
        <a href="products.php">Our Services</a>     
        <!-- <a href="message.php">Messege</a> -->
        <a href="custom1.php">Custom Home</a>
    </nav>
        
    </header>
    
    <div class="container">
    <section class="portfolio" id="portfolio">
    <div class="dashboard-section">
                    <h2>Add Images To Our Services</h2>
                    
                        <?php
                        include_once 'connection.php';

                        // SQL query to retrieve data from the table
                        $sql = "SELECT * FROM discriptions";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            echo "<table>";
                            echo "<tr><th>Id</th><th>Heading</th><th>Discription</th></tr>";
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr><td>{$row['id']}</td><td>{$row['heading']}</td><td>{$row['discription']}</td></tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "0 results";
                        }
                        ?>
                    
                </div>

        <form action="add.php" method="post" enctype="multipart/form-data">
            <div class="dashboard-section">
                <div class="portfolio-container">
                    <div class="input-box">
                    <label for="name">Heading:</label>
                    <input type="text" name="heading" required>
                    <br><br>
                    <label for="name">Discription:</label>
                    <input type="text" name="discription" required>
                    <br><br>
                    </div>
                    <div class="btn">
                        <button type="submit" name="insert">insret</button>
                    </div>
                </div>
            </div>
        </form>
        <form action="" method="post">
                    <label for="id">ID to delete:</label>
                    <input type="number" name="id" required>
                    <div class="btn">
                        <button type="submit" name="delete">Delete Data</button>
                    </div>
                </form>
        
        <!-- <form action="add.php" method="post" enctype="multipart/form-data">
            <div class="dashboard-section">
                <div class="portfolio-container">
                    <div class="input-box">
                    <label for="name">Username:</label><br>
                    <input type="text" name="name" required>
                    <br><br>
                    <label for="name">Password:</label><br>
                    <input type="password" name="password" required>
                    <br><br>
                    </div>
                        <button class="btn" type="submit" name="Insert">insret</button>
                </div>
            </div>
        </form> -->
        <nav></nav>
        <hr>
        <div class="dashboard-section">
                    <h2>Add Images To Our Services</h2>
                    
                        <?php
                        include_once 'connection.php';

                        // SQL query to retrieve data from the table
                        $sql = "SELECT * FROM members";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            echo "<table>";
                            echo "<tr><th>Id</th><th>Name</th><th>Position</th><th>Images</th></tr>";
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['position']}</td><td><img src='data:image;base64,{$row['image']} ' alt='Image' style='width: 50px;'></td></tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "0 results";
                        }
                        ?>
                    
                </div>


               
                <form action="add.php" method="post" enctype="multipart/form-data">
                    <div class="dashboard-section">
                        <div class="portfolio-container">
                            <div class="input-box">
                            <label for="name">Name :</label>
                            <input type="text" name="name" required>
                          
                            <label for="image">Image :</label>
                            <!-- <input type="file" name="image" accept="image/*" required> -->
                            <input type="file" name="image" id="fileInput" accept="image/*" required>
                            <br><br>

                            <label for="name">Position :</label>
                            <input type="text" name="position" required>
                         
                            </div>
                            <div class="btn">
                                <button type="submit" name="insert-mem">insret</button>
                            </div>
                        </div>
                    </div>
                </form>
                <form action="" method="post">
                    <label for="id">ID to delete:</label>
                    <input type="number" name="id" required>
                    <div class="btn">
                        <button type="submit" name="delete">Delete Data</button>
                    </div>
                </form>
    </section>
    </div>
</body>
</html>