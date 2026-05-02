<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Post Form</h1>
    <form method="post">
        Name : <input type="text" name="name"><br>
        <input type="submit" value="Submit">
    </form>
<?php
if(isset($_POST['name'])){
    echo "your name is ".$_POST['name'];
}
?>
</body>
</html>