<?php
// Database connection
$servername = "localhost";  // Database server
$username = "root";         // Database username
$password = "";             // Database password (leave empty for XAMPP)
$dbname = "land_estate";    // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch all users
$sql = "SELECT * FROM user_details";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users - Land Estate Company</title>
    <link rel="stylesheet" href="waweru.css">
</head>
<body>
    <header>
        <h1>Land Estate Company</h1>
    </header>
    <main>
        <h2>Registered Users</h2>
        <!-- Table to display user details -->
        <table border="1">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>ID Number</th>
                    <th>Order Number</th>
                    <th>Country</th>
                    <th>Ownership</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Check if there are any users in the database
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["name"] . "</td>
                                <td>" . $row["idno"] . "</td>
                                <td>" . $row["order_no"] . "</td>
                                <td>" . $row["country"] . "</td>
                                <td>" . $row["ownership"] . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No users found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>

<?php
$conn->close();
?>
