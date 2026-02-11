<?php
include 'db.php';

// SQL query to retrieve all records
$sql = "SELECT * FROM studentsinfo";
$result = $conn->query($sql);

echo "<h2>All Records</h2>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='8'>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>City</th>
                <th>Group ID</th>
                <th>Action</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><a href='updatesingle.php?id={$row['id']}'>{$row['id']}</a></td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['city']}</td>
                <td>{$row['groupId']}</td>
                <td><a href='updatesingle.php?id={$row['id']}'>Update/Delete</a></td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No results found.";
}

$conn->close();
?>
<br>
<a href='create.php'>Add New Record</a>
