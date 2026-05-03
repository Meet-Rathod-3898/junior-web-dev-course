<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multiple/form-data">
        <input type="file" name="img"><br>
        <input type="submit" value="Upload">
    </form>
    <?php
     if(isset($_FILES['img'])){
        echo "File Name :".$_FILES['img']['name'];
     }
    ?>
</body>
</html>