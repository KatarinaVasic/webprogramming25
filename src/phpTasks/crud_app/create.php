<!DOCTYPE html>
<html>
<head>
    <title>Create Record</title>
</head>
<body>

<h2>Input Your Information Below:</h2>

<form name="form1" method="post" action="process.php">
    <div>
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" required>
    </div>

    <div>
        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname" required>
    </div>

    <div>
        <label for="city">City:</label>
        <input type="text" id="city" name="city" required>
    </div>

    <div>
        <label for="groupid">Group ID:</label>
        <select id="groupid" name="groupid">
            <option value="BBCAP19">BBCAP19</option>
            <option value="BBCAP20">BBCAP20</option>
            <option value="BBCAP21">BBCAP21</option>
            <option value="BBCAP22">BBCAP22</option>
            <option value="Others">Others</option>
        </select>
    </div>

    <br>
    <button type="submit" name="submit">Submit</button>
</form>

</body>
</html>
