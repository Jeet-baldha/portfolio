<?php
// Establish database connection
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'database';
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check for errors in the database connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Check if the update form was submitted
if (isset($_POST['update'])) {
    // Prepare the update statement
    $stmt = $conn->prepare("UPDATE data SET uname=?, email=?, password=? WHERE id=?");
    $stmt->bind_param("sssi", $_POST['uname'], $_POST['email'], $_POST['password'], $_POST['id']);

    // Execute the update statement
    if ($stmt->execute()) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    // Close the prepared statement
    $stmt->close();
}

// Display the update form
else {
    // Retrieve the record from the database
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM data WHERE id=$id");

    // Display the record in an HTML form
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Update record - CRUD operations with PHP and MySQL</title>
        </head>
        <body>
            <h1>Update record - CRUD operations with PHP and MySQL</h1>

            <form method="post" action="update.php">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <label for="uname">Field 1:</label>
                <input type="text" name="uname" id="uname" value="<?php echo $row['uname']; ?>"><br>

                <label for="email">Field 2:</label>
                <input type="text" name="email" id="email" value="<?php echo $row['email']; ?>"><br>

                <label for="password">Field 3:</label>
                <input type="text" name="password" id="password" value="<?php echo $row['password']; ?>"><br>

                <input type="submit" name="update" value="Update">
            </form>

        </body>
        </html>
        <?php
    } else {
        echo "No record found";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
