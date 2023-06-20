<?php
// Check if the delete form was submitted

echo $sql;
if (isset($_POST['delete'])) {
    // Connect to the database
    $host = 'localhost'; // Database server hostname
    $username = 'root'; // Database username
    $password = ''; // Database password
    $dbname = 'database'; // Database name
    $conn = mysqli_connect($host, $username, $password, $dbname);

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Delete the record from the database
    $sql = "DELETE FROM data WHERE id = " . $_POST['id'];
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}

// Display the delete form
else {
    // Connect to the database
    $host = 'localhost'; // Database server hostname
    $username = 'root'; // Database username
    $password = ''; // Database password
    $dbname = 'database'; // Database name
    $conn = mysqli_connect($host, $username, $password, $dbname);

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve the record from the database
    $sql = "SELECT * FROM data WHERE id = " . $_GET['id'];
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
        // Display the record in an HTML form
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            ?>
            <!DOCTYPE html>
            <html>
            <head>
                <title>Delete record - CRUD operations with PHP and MySQL</title>
            </head>
            <body>
                <h1>Delete record - CRUD operations with PHP and MySQL</h1>

                <form method="post" action="delete.php">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <p>Are you sure you want to delete this record?</p>
                    <input type="submit" name="delete" value="Yes">
                    <a href="index.html">No</a>
                </form>

            </body>
            </html>
            <?php
        } else {
            echo "No record found";
        }
    } else {
        // Display an error message
        echo "Error retrieving record: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
