<?php
// Check if the form was submitted
if (isset($_POST['submit'])) {

    // Collect form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];

    // Include database connection
    include 'db.php';

    // Insert query
    $sql = "INSERT INTO studentsinfo (first_name, last_name, city, groupId)
            VALUES ('$fname', '$lname', '$city', '$groupid')";

    // Execute query
    if ($conn->query($sql) === TRUE) {
        echo "New record added successfully<br>";
        echo "<a href='create.php'>Add another</a><br>";
        echo "<a href='read.php'>View all records</a>";
    } else {
        echo "Error: " . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
