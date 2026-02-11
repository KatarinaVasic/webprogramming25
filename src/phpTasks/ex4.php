<?php include 'header.php'; ?>

<h2>Exercise 4: Control Flow and Loops</h2>

<div style="max-width: 750px; margin: 0 auto;">

    <div style="
        background: #ffffff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        text-align: left;
    ">

        <h3 style="color:#009688; font-weight:700;">Voting Eligibility (If / Else)</h3>

        <form method="post" style="margin-top:20px;">
            <label class="form-label">Name</label>
            <input type="text" name="vname" class="form-control mb-3" required>

            <label class="form-label">Age</label>
            <input type="number" name="vage" class="form-control mb-3" required>

            <button type="submit" name="voteCheck"
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
                Check Eligibility
            </button>
        </form>

        <?php
        if (isset($_POST["voteCheck"])) {
            $name = $_POST["vname"];
            $age = $_POST["vage"];

            if ($age >= 18) {
                echo "<h4 style='margin-top:20px; color:#ff7043;'>$name, you are eligible for voting.</h4>";
            } else {
                echo "<h4 style='margin-top:20px; color:#ff7043;'>$name, you are NOT eligible for voting.</h4>";
            }
        }
        ?>

        <hr style="margin:40px 0;">


        <h3 style="color:#009688; font-weight:700;">Switch Case: Current Month</h3>

        <?php
            $month = date("F");
            if ($month == "August") {
                echo "<p style='margin-top:15px;'><strong>It's August, so it's still holiday.</strong></p>";
            } else {
                echo "<p style='margin-top:15px;'><strong>Not August, this is $month so I don't have any holidays.</strong></p>";
            }
        ?>

        <hr style="margin:40px 0;">


        <h3 style="color:#009688; font-weight:700;">For Loop: Multiplication Table</h3>

        <form method="post" style="margin-top:20px;">
            <label class="form-label">Enter a number</label>
            <input type="number" name="multnum" class="form-control mb-3" required>

            <button type="submit" name="multCheck"
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
                Show Table
            </button>
        </form>

        <?php
        if (isset($_POST["multCheck"])) {
            $n = $_POST["multnum"];
            echo "<h4 style='margin-top:20px; color:#ff7043;'>Multiplication Table of $n</h4>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<p>$n x $i = " . ($n * $i) . "</p>";
            }
        }
        ?>

        <hr style="margin:40px 0;">


        <h3 style="color:#009688; font-weight:700;">While Loop: Numbers from 1 to n</h3>

        <form method="post" style="margin-top:20px;">
            <label class="form-label">Enter a number</label>
            <input type="number" name="whilenum" class="form-control mb-3" required>

            <button type="submit" name="whileCheck"
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
                Show Numbers
            </button>
        </form>

        <?php
        if (isset($_POST["whileCheck"])) {
            $n = $_POST["whilenum"];
            echo "<h4 style='margin-top:20px; color:#ff7043;'>Numbers from 1 to $n</h4>";
            $i = 1;
            while ($i <= $n) {
                echo "$i ";
                $i++;
            }
        }
        ?>

        <hr style="margin:40px 0;">


        <h3 style="color:#009688; font-weight:700;">Foreach Loop: Array Elements</h3>

        <?php
            $myarray = array("HTML", "CSS", "PHP", "JavaScript");
            echo "<p><strong>Array Elements:</strong></p>";
            foreach ($myarray as $item) {
                echo "<p>$item</p>";
            }
        ?>

    </div>

</div>

<?php include 'footer.php'; ?>
