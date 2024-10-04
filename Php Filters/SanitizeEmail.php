<html>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <input type="text" name="data">
            <button type="submit">Submit</button>
        </form>

        <?php 
        if (filter_has_var(INPUT_POST, 'data')) {
            $original_email = $_POST['data'];
            $sanitized_email = filter_var($original_email, FILTER_SANITIZE_EMAIL);
            echo "Email: " . htmlspecialchars($sanitized_email);
        }
        ?>
    </body>
</html>
