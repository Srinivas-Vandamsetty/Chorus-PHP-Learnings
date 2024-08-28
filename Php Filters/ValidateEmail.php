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
    if(filter_input(INPUT_POST,'data',FILTER_VALIDATE_EMAIL)){
        echo "Email is Valid!";
    } 
    else {
        echo "Email is not Valid!";
    }
}
?>
