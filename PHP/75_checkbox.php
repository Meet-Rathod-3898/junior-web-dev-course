<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
     <input type="checkbox" name="hobby[]" value="cricket">cricket<br>
     <input type="checkbox" name="hobby[]" value="writing">writing<br>
     <input type="checkbox" name="hobby[]" value="singing">singing<br>
     <input type="checkbox" name="hobby[]" value="playimg">playimg<br>
     <input type="checkbox" name="hobby[]" value="reading">reading<br>
    
        <input type="submit" value="Submit">
    </form>
    <?php
    if(isset($_POST['hobby']))
        {
            foreach($_POST['hobby']  as $h){
                echo $h ."<br>";
            }
        }
    ?>
</body>
</html>