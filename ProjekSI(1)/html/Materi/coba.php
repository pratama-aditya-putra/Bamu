
<html>
<head>
    </head>
    <body>
        <?php
if(isset($_POST['submit'])) 
{ 
    $name = $_POST['name'];
    echo "<script>document.getDocumentById('name').value= 'test';</script>";
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <input type="text" name="name" value="<?php echo $name; ?>"><br>
   <input type="submit" name="submit" value="Submit Form"><br>
</form>
        <?php echo ".php"?>
    </body>
</html>