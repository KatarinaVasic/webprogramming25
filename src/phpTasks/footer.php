    </main>

    <footer>
        <?php
            $filename = basename($_SERVER['PHP_SELF']);
            $modified = date("F d Y H:i:s", filemtime($filename));
            echo "Last modified: $modified";
        ?>
    </footer>

</body>
</html>

