<?php include 'header.php'; ?>

<h2>Exercise 3: Variables, Strings & Operators</h2>

<div style="max-width: 750px; margin: 0 auto;">

    <div style="
        background: #ffffff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        text-align: left;
    ">

        <h3 style="color:#009688; font-weight:700;">Enter Your Name</h3>

        <form method="post" style="margin-top:20px;">
            <label class="form-label">Firstname</label>
            <input type="text" name="firstname" class="form-control mb-3" required>

            <label class="form-label">Lastname</label>
            <input type="text" name="lastname" class="form-control mb-3" required>

            <button type="submit" 
                style="
                    width:100%;
                    background-color:#009688;
                    color:white;
                    padding:10px;
                    border:none;
                    border-radius:8px;
                    font-size:16px;
                    font-weight:600;
                ">
                Submit
            </button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fname = $_POST["firstname"];
            $lname = $_POST["lastname"];
            echo "<h3 style='margin-top:25px; text-align:center; color:#ff7043;'>Hello $fname $lname, You are welcome to my site.</h3>";
        }
        ?>

        <hr style="margin:40px 0;">

        <h3 style="color:#009688; font-weight:700;">Bootstrap Table</h3>

        <table class="table table-bordered table-striped mt-3">
            <tr style="background:#009688; color:white;">
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Age</th>
            </tr>
            <tr>
                <td>Katarina</td>
                <td>Student</td>
                <td>20</td>
            </tr>
        </table>

        <hr style="margin:40px 0;">

        <h3 style="color:#009688; font-weight:700;">String Variables</h3>
        <?php
            $str1 = "Hello";
            $str2 = "World";
            $joined = $str1 . " " . $str2;
            echo "<p>Joined string: <strong>$joined</strong></p>";
            echo "<p>Length: <strong>" . strlen($joined) . "</strong></p>";
        ?>

        <hr style="margin:40px 0;">

        <h3 style="color:#009688; font-weight:700;">Number Addition</h3>
        <?php
            $a = 298;
            $b = 234;
            $c = 46;
            $sum = $a + $b + $c;
            echo "<p>Total: <strong>$sum</strong></p>";
        ?>

        <hr style="margin:40px 0;">

        <h3 style="color:#009688; font-weight:700;">Browser Detection</h3>
        <?php
            echo "<p>Your browser: <strong>" . $_SERVER['HTTP_USER_AGENT'] . "</strong></p>";
        ?>

    </div>

</div>

<?php include 'footer.php'; ?>

