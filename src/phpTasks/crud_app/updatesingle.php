<?php
include 'db.php';

// Get the ID from the URL
$id = $_GET['id'];

// Fetch the existing record
$result = mysqli_query($conn, "SELECT * FROM studentsinfo WHERE id='$id'");
$row = mysqli_fetch_array($result);
?>

<h2>Update your information below:</h2>

<form method="post" action="">
    <div>
        <label>First Name:</label>
        <input type="text" name="fname" required value="<?php echo $row['first_name']; ?>">
    </div>

    <div>
        <label>Last Name:</label>
        <input type="text" name="lname" required value="<?php echo $row['last_name']; ?>">
    </div>

    <div>
        <label>City:</label>
        <input type="text" name="city" required value="<?php echo $row['city']; ?>">
    </div>

    <div>
        <label>Group ID:</label>
        <input type="text" name="groupid" required value="<?php echo $row['groupId']; ?>">
    </div>

    <br>
    <button type="submit" name="submit">Update Information</button>
    <button type="submit" name="delete">Delete Record</button>
</form>

<?php
// UPDATE logic
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];

    $query = mysqli_query($conn,
        "UPDATE studentsinfo 
         SET first_name='$fname', last_name='$lname', city='$city', groupId='$groupid' 
         WHERE id='$id'"
    );

    if ($query) {
        echo "<h3>Record updated successfully.</h3>";
        echo "<a href='read.php'>Back to records</a>";
    } else {
        echo "Update failed.";
    }
}

// DELETE logic
if (isset($_POST['delete'])) {
    $query = mysqli_query($conn, "DELETE FROM studentsinfo WHERE id='$id'");

    if ($query) {
        echo "<h3>Record deleted successfully.</h3>";
        echo "<a href='read.php'>Back to records</a>";
    } else {
        echo "Delete failed.";
    }
}

$conn->close();
?>
