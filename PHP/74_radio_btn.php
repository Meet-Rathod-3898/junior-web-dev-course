<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
     <input type="radio" name="gender" value="male">Male<br>
     <input type="radio" name="gender" value="Female">Female<br>
        <input type="submit" value="Submit">
    </form>
    <?php
    if(isset($_POST['gender']))
        {
            echo "gender is :" .$_POST['gender'];
        }
    ?>
</body>
</html>