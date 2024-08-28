<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <input type="text" name="data">
        <button type="submit">Submit</button>
    </form>
    </body>
</html>
<?php 
if(filter_has_var(INPUT_POST,'data')){
    $email = $_POST['data'];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo "Email: " . $email;
}
?>
