<?php
$no = $_POST['no'];
echo $no,"<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form page</title>
</head>
<body>
    <table border="1">  
        <form action="" method="post">
            <input type="text" name="no" value="<?php echo $no;?>">
            <br>
            <input type="text" name="no1" value="<?php echo $no;?>">
            <br>
            <input type="text" name="no2" value="<?php echo $no;?>">
            <br>
            <input type="submit" name="hello" value="Submit">
        </form>
    </table>
</body>
</html>