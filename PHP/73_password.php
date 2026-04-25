<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
     <input type="password" name="password" placeholder="Enter Your Password">
        <input type="submit" value="Submit">
    </form>
    <?php
    if(isset($_POST['password']))
        {
            echo "Password is :" .$_POST['password'];
        }
    ?>
</body>
</html>