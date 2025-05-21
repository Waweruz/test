<?php
// Check if password is correct, otherwise redirect to login page
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['password'] !== '8888') {
        // Redirect back to the login page if the password is incorrect
        header('Location: index.html');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Details - Land Estate Company</title>
    <link rel="stylesheet" href="waweru.css">
</head>
<body>
    <header>
        <h1>Land Estate Company</h1>
    </header>
    <main>
        <section id="details-page">
            <h2>Enter Your Details</h2>
            <!-- Form to submit details to the PHP script -->
            <form id="details-form" method="POST" action="submit_details.php">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>

                <label for="idno">ID Number:</label>
                <input type="text" id="idno" name="idno" placeholder="Enter your ID number" required>

                <label for="order-no">Order Number:</label>
                <input type="text" id="order-no" name="order_no" placeholder="Enter your order number" required>

                <label for="country">Country:</label>
                <input type="text" id="country" name="country" placeholder="Enter your country" required>

                <label for="ownership">Ownership:</label>
                <input type="text" id="ownership" name="ownership" placeholder="Enter ownership details" required>

                <button type="submit">Submit</button>
            </form>
            <a href="view_users.php">View Registered Users</a>
        </section>
    </main>
</body>
</html>
