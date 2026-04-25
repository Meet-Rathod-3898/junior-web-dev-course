<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <select name="city" >
        <option value="">select city</option>
        <option value="ahmedabad">ahmedabad</option>
        <option value="bhavnagar">bhavnagar</option>
        <option value="rajkot">rajkot</option>
        <option value="surat">surat</option>
    </select>
        <input type="submit" value="Submit">
    </form>
    <?php
    if(isset($_POST['city']))
        {
              echo "city is :" .$_POST['city'];
        }
    ?>
</body>
</html>